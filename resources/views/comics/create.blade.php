@extends('layouts.main')
@section('content')
    <h1>Inserisci un nuovo comic</h1>

    <div class="row">
        <div class="col-8">


            <form action="{{route('comics.store')}}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Nome comic</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                <button type="submit" class="btn btn-primary" >Invia</button>
                <button type="reset" class="btn btn-secondary" >Annulla</button>

            </form>


        </div>
    </div>
@endsection
