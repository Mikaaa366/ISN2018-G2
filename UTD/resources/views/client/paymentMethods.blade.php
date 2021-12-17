@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/backToSenderAddress">Sender Address</a></li>
                    <li class="breadcrumb-item"><a href="/backToDeliveryAddress">Delivery Address</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payment Methods</li>
                </ol>
            </nav>

                <div class="card-body">
                    <h5><b>Dane do przesyłki:</b></h5>
                        <table class="table">
                            <tr>
                                <td>Szerokość:</td>
                                <td>{{ $step1['width'] }}</td>
                            </tr>
                            <tr>
                                <td>Wysokość:</td>
                                <td>{{ $step1['height'] }}</td>
                            </tr>
                            <tr>
                                <td>Długość:</td>
                                <td>{{ $step1['length'] }}</td>
                            </tr>
                            <tr>
                                <td>Waga:</td>
                                <td>{{ $step1['weight'] }}</td>
                            </tr>
                            <tr>
                                <td><b>Cena:</b></td>
                                <td><b>{{ $price->price }}</b></td>
                            </tr>
                        </table>

                    <h5><b>Wybierz sposób płatności:</b></h5>
                    
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <div class="card p-2">
                                <a href= "/addOrder/1" class="card-block stretched-link">
                                    <h4 class="card-title">Blik</h4>
                                    <p class="card-text"></p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href= "/addOrder/2" class="card-block stretched-link">
                                    <h4 class="card-title">PayU</h4>
                                    <p class="card-text"></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
