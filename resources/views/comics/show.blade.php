@extends('layouts.app')

@section('show')
    <div class="container">
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
