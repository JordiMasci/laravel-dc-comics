@extends('layouts.app')

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('index')
    <div class="container">
        <a href="{{ route('comics.create') }}" class="btn btn-primary mt-5">
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
                        <th scope="col" class="d-flex">

                            <a href="{{ route('comics.edit', $comic) }}" class="mx-2">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <a href="{{ route('comics.show', $comic) }}" class="mx-2">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <!-- Button trigger modal -->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $comic->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>

                            <!-- Modal -->

                            <div class="modal fade" id="delete-modal-{{ $comic->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Vuoi davvero cancellare {{ $comic->title }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>

                                            <form action="{{ route('comics.destroy', $comic) }}" class="mx-2"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-primary">Elimina</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
