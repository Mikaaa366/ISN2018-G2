<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientPanelCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $step1 = session()->get('step1');
        if($step1 == null){
            $step1 = [
                'width' => "",
                'height' => "",
                'length' => "",
                'weight' => ""
            ];
        }
        return view('client.home')->with('step1', $step1);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backToSenderAddress()
    {
        return view('client.senderAddress');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backToDeliveryAddress()
    {
        return view('client.deliveryAddress');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function senderAddress(Request $request)
    {
        $token = $request->session()->token();
        $token = csrf_token();

        $step1 = $request->only(['width', 'height', 'length', 'weight']);//, 'packageType'

        foreach($step1 as $value){
            if (empty($value)){
                return redirect()->back()->with('status', 'Nie uzupełniłeś wszystkich danych');;
            }
        }

            $request->session()->put('step1', $step1);
            session()->save();

        return view('client.senderAddress');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deliveryAddress(Request $request)
    {
        $token = $request->session()->token();
        $token = csrf_token();

        return view('client.deliveryAddress');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paymentMethods(Request $request)
    {
        $token = $request->session()->token();
        $token = csrf_token();

        return view('client.paymentMethods');
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
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Session()->forget('step1');

        return redirect()->back();
    }
}
