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
        <!-- <th scope="col">Docelowy adres</th> -->
        <th scope="col">Obecna sortownia</th>
        <th scope="col">Przekieruj</th>
        </tr>
    </thead>
    <tbody>
        @foreach($zamowienia as $value)
        <tr>
        <th scope="row">{{ $value['id_zamowienia'] }}</th>
        <td>{{ $value['reference_number'] }}</td>
        <td>{{ $value['ilosc_sztuk'] }}</td>
        <!-- <th scope="col">Docelowy adres</th> -->
        <td>{{ $value['sortownie'] }}</td>
        <td>
            <form action="/changeSort" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <select class="form-control" id="sort" name="sort">
                            @foreach($sortownie as $val);
                            <option value="{{ $val['województwo'] }}">{{ $val['nazwa_sortowni'] }} - {{ $val['województwo'] }} - {{ $val['miasto'] }}</option>
                            @endforeach
                            <option value="Dostarczona">Dostarczona</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="hidden" name="id_zamowienia" value="{{ $value['id_zamowienia'] }}">
                        <button class="btn btn-secondary" type="submit">Zmień</button>
                    </div>
                </div>
                
            </form>
            
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $zamowienia->links(); }}
</div>
@endsection