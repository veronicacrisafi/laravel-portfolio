@extends('layouts.admin')

@section('title', 'Progetti')

@section('content')
    <div class="row">

        @foreach ($projects as $project)
            <div class="col-4 my-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title mb-5">{{ $project->titolo }}</h4>
                        <h5 class="card-subtitle mb-4 text-body-secondary">Autore:{{ $project->autore }}</h5>
                        <h6 class="card-subtitle mb-3">Categoria:{{ $project->categoria }}</h6>
                        <p class="card-text">{{ $project->contenuto }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
