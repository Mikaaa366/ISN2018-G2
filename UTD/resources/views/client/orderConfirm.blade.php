@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="card col-md-6 m-0 p-0">
            <div class="card-header text-center">Twoje zamówienie zostało pomyślnie dodane, oczekuj na kuriera.</div>
            <div class="card-body text-secondary  text-center">
                Aby śledzić przesyłkę na trasie użyj kodu:</br></br>
                {{ $referenceNumber }}
                </br></br><hr/>
                <a class="btn btn-link" href="/">Przejdź do szukania paczki</a>
            </div>
        </div>
    </div>
</div>


@endsection