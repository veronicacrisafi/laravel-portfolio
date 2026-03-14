@extends('layouts.admin')

@section('title', 'Aggiungi un nuovo progetto!')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-control mb-3 d-flex flex-column">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" value="{{ $project->titolo }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="autore">Autore</label>
            <input type="text" name="autore" id="autore" value="{{ $project->autore }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria" value="{{ $project->categoria }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="contenuto">Contenuto</label>
            <textarea name="contenuto" id="contenuto" width="100%" rows="5">{{ $project->contenuto }}</textarea>
        </div>
        <input type="submit" value="Salva">
    </form>

@endsection
