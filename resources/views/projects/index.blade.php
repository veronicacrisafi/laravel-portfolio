@extends('layouts.admin')

@section('title', 'Progetti')

@section('content')
    <a href="{{ route('projects.create') }}" class="btn btn-outline-success mb-4">Aggiungi nuovo progetto</a>
    <div class="row">

        @foreach ($projects as $project)
            <div class="col-4 my-3">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title mb-5">{{ $project->titolo }}</h4>
                        <h5 class="card-subtitle mb-4 text-body-secondary">Autore: {{ $project->autore }}</h5>
                        <h6 class="card-subtitle mb-3">Categoria: {{ $project->categoria }}</h6>
                        <p class="card-text">{{ $project->contenuto }}</p>
                        <div class="mt-auto">
                            <a class='btn btn-outline-primary w-100'
                                href="{{ route('projects.show', $project->id) }}">Visualizza</a>
                        </div>
                        <div class="d-flex py-4 justify-content-between">
                            <a class="btn btn-outline-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
