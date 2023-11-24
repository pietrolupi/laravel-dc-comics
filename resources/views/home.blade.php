@extends('layouts.main');
@section('content')

<h1>HOME</h1>
<a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un nuovo comic</a>

@endsection
