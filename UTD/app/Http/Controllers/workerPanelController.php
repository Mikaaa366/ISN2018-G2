<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zamowienia;
use App\Models\sortownie;

class workerPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zamowienia = zamowienia::select(['id_zamowienia', 'ilosc_sztuk', 'reference_number', 'sortownie'])
            ->where('reference_number', '!=', '')
            ->where('sortownie', '!=', '') 
            ->where('sortownie', '!=', 'Dostarczona')
            ->paginate(10);

        if( $zamowienia == NULL){
            $zamowienia = [];
        }

        $sortownie = sortownie::select(['nazwa_sortowni', 'miasto', 'województwo'])->get();

        if( $sortownie == NULL){
            $sortownie = [];
        }
        
        return view('magazine.home',[
            'zamowienia' => $zamowienia,
            'sortownie' => $sortownie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeSort(Request $request)
    {
        $token = $request->session()->token();
        $token = csrf_token();

        $changeSort = $request->only(['id_zamowienia', 'sort']);

        zamowienia::where('id_zamowienia', $changeSort['id_zamowienia'])
            ->update(array('sortownie' => $changeSort['sort']));
            
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
