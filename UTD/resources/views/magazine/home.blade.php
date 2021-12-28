@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Zarządzaj paczkami:</h4>
    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Numer referencyjny</th>
        <th scope="col">Ilość sztuk</th>
        <th scope="col">sortownia</th>
        </tr>
    </thead>
    <tbody>
        @foreach($zamowienia as $value)
        <tr>
        <th scope="row">{{ $value['id_zamowienia'] }}</th>
        <td>{{ $value['reference_number'] }}</td>
        <td>{{ $value['ilosc_sztuk'] }}</td>
        <td>{{ $value['sortownie'] }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection