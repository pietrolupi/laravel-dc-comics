@extends('layouts.main')

@section('content')
    <h1>Lista fumetti:</h1>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic )

            <tr>
              <td>{{$comic->title}}</td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->type}}</td>
              <td>
                <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">SHOW</a>
                <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">EDIT</a>

                <form
                 class="d-inline-block"
                 action="{{route('comics.destroy', $comic)}}"
                 method="POST"
                 onsubmit="return confirm('Sei sicuro di voler eliminare {{$comic->title}}?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >DELETE</button>
                </form>

              </td>
            </tr>
            @endforeach

        </tbody>
      </table>

      {{$comics->links()}}

@endsection
