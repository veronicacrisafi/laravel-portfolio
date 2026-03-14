@extends('layouts.projects')

@section('title', 'Aggiungi un nuovo progetto!')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-control mb-3 d-flex flex-column">
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="autore">Autore</label>
            <input type="text" name="autore" id="autore" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" required>
                <option value="Web Design">Web Design</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Back End">Back End</option>
            </select>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="contenuto">Contenuto</label>
            <textarea name="contenuto" id="contenuto" width="100%" rows="5" required></textarea>
        </div>
        <div class="d-flex flex-row gap-2">
            <input type="submit" class="btn btn-outline-success w-50" value="Salva">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary w-50">Indietro</a>
        </div>
    </form>

@endsection
