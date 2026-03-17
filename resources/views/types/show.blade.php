@extends('layouts.types')

@section('title', 'Tipologia')
@section('backLink')
    <p class="mb-3">
        <a class="btn btn-outline-secondary" href="{{ route('types.index') }}">🔙 confermo e torno alle tipologie</a>
    </p>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h1 class="card-title text-center mb-5">
                        {{ $type->nome }}</h1>
                    <div class="card-subtitle text-center">
                        <p>{{ $type->descrizione }}</p>
                    </div>

                    <div class="d-flex py-4">
                        <a class="btn btn-outline-warning me-5 w-50" href="{{ route('types.edit', $type) }}">Modifica</a>
                        <button type="button" class="btn btn-outline-danger w-50" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Elimina
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
