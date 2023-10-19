@extends('layouts.app')


@section('create')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">
            Torna alla lista
        </a>

        <a href="{{ route('comics.show', $comic) }}" class="btn btn-success mt-5 mb-5">
            mostra i dettagli
        </a>

        <h1 class="mb-5">Modifica contenuto</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row g-3 ">

                <div class="col-3">
                    <label for="title">Titolo</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$comic->title}}">
                </div>

                <div class="col-3">
                    <label for="description">Descrizione</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{$comic->description}}">
                </div>

                <div class="col-3">
                    <label for="thumb">Link</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" value="{{$comic->thumb}}">
                </div>

                <div class="col-3">
                    <label for="sale_date">Data</label>
                    <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{$comic->sale_date}}">
                </div>

                <div class="col-3 mb-5">
                    <label for="price">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{$comic->price}}">
                </div>

                <div class="col-3 mb-5">
                    <label for="series">Serie</label>
                    <input type="text" id="series" name="series" class="form-control" value="{{$comic->series}}">
                </div>

                <div class="col-3 mb-5">
                    <label for="type">Tipo</label>
                    <input type="text" id="type" name="type" class="form-control" value="{{$comic->type}}">
                </div>

            </div>

            <button class="btn btn-primary mt-5">Salva</button>

        </form>
    </div>
@endsection
