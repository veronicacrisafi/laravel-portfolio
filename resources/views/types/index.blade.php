@extends('layouts.types')

@section('title', ' Tutte le tipologie')

@section('content')
    <div class="row">
        @foreach ($types as $type)
            <div class="col-4 my-3">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <div class="card-title text-center my-5">
                            <h1> {{ $type->nome }}</h1>
                        </div>
                        <div class="card-subtitle">
                            <p>{{ $type->descrizione }}</p>
                        </div>
                        <div class="mt-auto">
                            <a class='btn btn-outline-primary w-100'
                                href="{{ route('types.show', $type->id) }}">Visualizza</a>
                        </div>
                        <div class="d-flex py-4">
                            <a class="btn btn-outline-warning me-5 w-50"
                                href="{{ route('types.edit', $type) }}">Modifica</a>
                            <button type="button" class="btn btn-outline-danger w-50" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Elimina
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vuoi eliminare la tipologia?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('types.destroy', $type) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
