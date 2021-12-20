<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\opakowanie;
use App\Models\miasto;
use App\Models\ulica;
use App\Models\klient;
use App\Models\zamowienia;

class AddOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOrder($id)
    {
        $step1 = session()->get('step1');
        $client[] = session()->get('step2');
        $client[] = session()->get('step3');
        $price = session()->get('price');
        
        if($step1 == null || $client == null){

            return redirect('/home')->with('status', 'Coś poszło nie tak, spróbuj ponownie.');
        } else {
            //dodawanie opakowania
            $idOpakowania = opakowanie::create([
                'Rodzaj_opakowania' => $step1['packageType'],
                'Szerokosc' => $step1['width'],
                'Dlugosc' => $step1['length'],
                'Wysokosc' => $step1['height'],
                'Waga' => $step1['weight']
            ])->id;

            foreach($client as $value){
                //dodawanie miasta
                $idMiasta = miasto::create([
                    'Nazwa_miasta' => $value['city'],
                    'Kod_pocztowy' => $value['zip_code'],
                    'Wojewodztwo' => $value['province']
                ])->id;
                //dodawanie ulicy
                $idUlicy = ulica::create([
                    'Nazwa_ulicy' => $value['address'],
                    'Numer_domu' => $value['house_number'],
                    'Numer_mieszkania' => $value['apartment_number'],
                    'id_miasta' => $idMiasta,
                ])->id;
                //dodawanie klienta
                $idKlienta[] = klient::create([
                    'imie' => $value['name'],
                    'nazwisko' => $value['surname'],
                    'id_ulicy' => $idUlicy,
                    'email' => $value['email'],
                    'phonenumber' => $value['phonenumber']
                ])->id;
            };

            //wyliczenie numeru referencyjnego
            $referenceNumber = md5(date("H").date("i").date("s").$idOpakowania);

            //dodawanie zamówienia
            zamowienia::create([
                'id_nadawca' => $idKlienta[0],
                'id_odbiorca' => $idKlienta[1],
                'Ilosc_sztuk' =>'1',
                'Kwota' => $price->price,
                'id_opakowania' => $idOpakowania,
                'reference_number' => $referenceNumber
            ]);

            return view('client.orderConfirm', [
                'referenceNumber' => $referenceNumber
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
