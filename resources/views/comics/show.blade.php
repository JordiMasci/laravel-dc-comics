@extends('layouts.app')

@section('show')
    <div class="container">

        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">
            Torna alla lista
        </a>

        <div class="row">
            <div class="col">
                {{ $comic->id }}
            </div>
            <div class="col">
                {{ $comic->title }}
            </div>
            <div class="col">
                {{ $comic->price }}
            </div>
            <div class="col">
                {{ $comic->sale_date }}
            </div>
        </div>
    </div>
@endsection
