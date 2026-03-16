@extends('layouts.projects')

@section('title', 'Aggiungi un nuovo progetto!')

@section('content')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control mb-3 d-flex flex-column">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" value="{{ $project->titolo }}" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="autore">Autore</label>
            <input type="text" name="autore" id="autore" value="{{ $project->autore }}" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="type_id">Categoria</label>
            <select name="type_id" id="type_id" required>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="contenuto">Contenuto</label>
            <textarea name="contenuto" id="contenuto" width="100%" rows="5" required>{{ $project->contenuto }}</textarea>
        </div>
        <div class="d-flex flex-row gap-2">
            <input type="submit" class="btn btn-outline-success w-50" value="Salva">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary w-50">Indietro</a>
        </div>
    </form>

@endsection
