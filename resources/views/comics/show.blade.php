@extends('layouts.main')

@section('content')

    <h1>{{$comic->title}}</h1>
    <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">EDIT</a>
    <p>{{$comic->description}}</p>
@endsection
