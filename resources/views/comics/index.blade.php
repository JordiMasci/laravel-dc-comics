@extends('layouts.app')

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-5">Lista Comics</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <th scope="col">{{ $comic->title }}</th>
                        <th scope="col">{{ $comic->price }}</th>
                        <th scope="col">{{ $comic->sale_date }}</th>
                        <th scope="col">

                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
