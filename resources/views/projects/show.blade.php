@extends('layouts.projects')

@section('title', 'Progetto')
@section('backLink')
    <p class="mb-3">
        <a class="btn btn-outline-secondary" href="{{ route('projects.index') }}">🔙 confermo e torno ai progetti</a>
    </p>
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-5">{{ $project->titolo }}</h4>
                    <h5 class="card-subtitle mb-4 text-body-secondary">Autore: {{ $project->autore }}</h5>
                    <h6 class="card-subtitle mb-3">Categoria: {{ $project->categoria }}</h6>
                    <p class="card-text">{{ $project->contenuto }}</p>
                    <div class="d-flex py-4">
                        <a class="btn btn-outline-warning me-5 w-50"
                            href="{{ route('projects.edit', $project) }}">Modifica</a>
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
                    Vuoi eliminare il progetto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .link-hover:hover {
            color: #0d6efd !important;
            text-decoration: underline !important;
        }
    </style>

@endsection
