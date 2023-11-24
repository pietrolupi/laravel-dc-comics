@extends('layouts.main')
@section('content')
    <h1>Modifica "{{$comic->title}}" </h1>

    <div class="row">
        <div class="col-8">


            <form action="{{route('comics.update', $comic)}}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Nome comic</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                </div>

                <button type="submit" class="btn btn-primary" >Invia</button>
                <button type="reset" class="btn btn-secondary" >Annulla</button>

            </form>


        </div>
    </div>
@endsection
