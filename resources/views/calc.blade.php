@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Calcolatrice') }}</div>

                    <div class="card-body">
                        <form action="" method="POST" id="myForm">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Numero 1</label>
                                <input type="text" class="form-control" id="num1">
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Numero 2</label>
                                <input type="text" class="form-control" id="num2">
                            </div>

                            <div class="mb-3">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="somma">
                                <label class="btn btn-outline-primary" for="btnradio1">Somma</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="sottrazione">
                                <label class="btn btn-outline-primary" for="btnradio2">Sottrazione</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="divisione">
                                <label class="btn btn-outline-primary" for="btnradio3">Divisione</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" value="moltiplicazione">
                                <label class="btn btn-outline-primary" for="btnradio4">Moltiplicazione</label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Invia</button>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection