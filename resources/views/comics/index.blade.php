@extends('layouts.app')

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('index')
    <div class="container">
        <a href="{{route('comics.create')}}" class="btn btn-primary mt-5">
            Crea nuovo contenuto
        </a>

        <h1 class="mt-5 mb-5">Lista Comics</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">data</th>
                    {{-- <th scope="col">thumb</th> --}}
                    {{-- <th scope="col">descrizione</th> --}}
                    <th scope="col">tipo</th>
                    <th scope="col">serie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <th scope="col">{{ $comic->title }}</th>
                        <th scope="col">{{ $comic->price }}</th>
                        <th scope="col">{{ $comic->sale_date }}</th>
                        {{-- <th scope="col">{{ $comic->thumb }}</th> --}}
                        {{-- <th scope="col">{{ $comic->description }}</th> --}}
                        <th scope="col">{{ $comic->type }}</th>
                        <th scope="col">{{ $comic->series }}</th>
                        <th scope="col">
                            <a href="{{route('comics.show', $comic)}}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
