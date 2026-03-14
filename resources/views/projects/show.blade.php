@extends('layouts.admin')

@section('title', $project->titolo)

@section('content')
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <div class="d-flex py-4">
                    <a class="btn btn-outline-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Elimina">
                    </form>
                </div>
                <div class="card-body">
                    <h4 class="card-title mb-5">{{ $project->titolo }}</h4>
                    <h5 class="card-subtitle mb-4 text-body-secondary">Autore: {{ $project->autore }}</h5>
                    <h6 class="card-subtitle mb-3">Categoria: {{ $project->categoria }}</h6>
                    <p class="card-text">{{ $project->contenuto }}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
