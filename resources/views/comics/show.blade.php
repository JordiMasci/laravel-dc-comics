@extends('layouts.app')

@section('show')
    <div class="container">

        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">
            Torna alla lista
        </a>

        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success mt-5 mb-5">
            Modifica
        </a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->type }}</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
