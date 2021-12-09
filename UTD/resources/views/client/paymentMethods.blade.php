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
