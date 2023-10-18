@extends('layouts.app')


@section('create')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">
            Torna alla lista
        </a>

        <h1 class="mb-5">Crea un nuovo contenuto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="row g-3 ">

                <div class="col-3">
                    <label for="titolo">Titolo</label>
                    <input type="text" id="titolo" name="titolo" class="form-control">
                </div>

                <div class="col-3">
                    <label for="descrizione">Descrizione</label>
                    <input type="text" id="descrizione" name="descrizione" class="form-control">
                </div>

                <div class="col-3">
                    <label for="data">Data</label>
                    <input type="text" id="data" name="data" class="form-control">
                </div>

                <div class="col-3 mb-5">
                    <label for="prezzo">Prezzo</label>
                    <input type="text" id="prezzo" name="prezzo" class="form-control">
                </div>

            </div>

            <button class="btn btn-primary mt-5">Salva</button>

        </form>
    </div>
@endsection
