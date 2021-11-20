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
                    <li class="breadcrumb-item active" aria-current="page">Delivery Address</li>
                </ol>
            </nav>

                <div class="card-body">
                    <h5><b>Podaj adres dostawy:</b></h5>
                    
                    <form action="/paymentMethods" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name" class="form-label">Imię:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col">
                                <label for="surname" class="form-label">Nazwisko:</label>
                                <input type="text" class="form-control" id="surname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="col">
                                <label for="phonenumber" class="form-label">Numer telefonu:</label>
                                <input type="number" class="form-control" id="phonenumber">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="length" class="form-label">Adres zamieszkania:</label>
                                <input type="text" class="form-control" id="length">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="house_number" class="form-label">Numer domu:</label>
                                <input type="number" class="form-control" id="house_number">
                            </div>
                            <div class="col">
                                <label for="apartment_number" class="form-label">Numer mieszkania:</label>
                                <input type="number" class="form-control" id="apartment_number">
                            </div>
                            <div class="col">
                                <label for="zip_code" class="form-label">Kod pocztowy:</label>
                                <input type="number" class="form-control" id="zip_code">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="province">Województwo:</label>
                                <select class="form-control" id="province">
                                    <option value="dolnośląskie">dolnośląskie</option>
                                    <option value="	kujawsko-pomorskie">kujawsko-pomorskie</option>
                                    <option value="lubelskie">lubelskie</option>
                                    <option value="lubuskie">lubuskie</option>
                                    <option value="łódzkie">łódzkie</option>
                                    <option value="małopolskie">małopolskie</option>
                                    <option value="mazowieckie">mazowieckie</option>
                                    <option value="opolskie">opolskie</option>
                                    <option value="podkarpackie">podkarpackie</option>
                                    <option value="podlaskie">podlaskie</option>
                                    <option value="pomorskie">pomorskie</option>
                                    <option value="śląskie">śląskie</option>
                                    <option value="świętokrzyskie">świętokrzyskie</option>
                                    <option value="warmińsko-mazurskie">warmińsko-mazurskie</option>
                                    <option value="wielkopolskie">wielkopolskie</option>
                                    <option value="zachodniopomorskie">zachodniopomorskie</option>
                                </select>
                            </div>
                            
                            <div class="col">
                                <label for="city" class="form-label">Miasto:</label>
                                <input type="text" class="form-control" id="city">
                            </div>
                        </div>

                        <button type="submit" class="mt-4 btn btn-primary">Przejdź dalej</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
