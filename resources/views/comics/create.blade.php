@extends('layouts.main')
@section('content')
    <h1>Inserisci un nuovo comic</h1>

    <form action="{{route('comics.store')}}" method="POST">
        <div class="row">
            <div class="col-8">
                <div class="mb-3">
                    <label for="title" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="title" name="title">

                </div>
            </div>
        </div>


    </form>
@endsection
