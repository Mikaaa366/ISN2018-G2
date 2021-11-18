@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>

                <div class="card-body">
                    <h5><b>Podaj wielkość przesyłki:</b></h5>
                    
                    <form action="/deliveryAddress" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="width" class="form-label">Szerokosć:</label>
                                <input type="number" class="form-control" id="width">
                            </div>
                            <div class="col">
                                <label for="height" class="form-label">Wysokość:</label>
                                <input type="number" class="form-control" id="height">
                            </div>
                            <div class="col">
                                <label for="length" class="form-label">Długość:</label>
                                <input type="number" class="form-control" id="length">
                            </div>
                        </div>
                        <div class="form-text">Podaj wartości w milimetrach</div>

                        <div class="mt-4 row">
                            <div class="col">
                                <input type="number" class="form-control" id="weight" placeholder="Waga:">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="packageType" placeholder="Typ:" readonly>
                            </div>

                        </div>
                        <div class="form-text mb-4">Podaj wagę w kilogramach</div>

                        <button type="submit" class="btn btn-primary">Przejdź dalej</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
