@extends('layouts.types')

@section('title', 'Aggiungi una tipologia')

@section('content')
    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control mb-3 pb-3 d-flex flex-column">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $type->nome }}" required>
        </div>
        <div class="form-control mb-3 pb-3 d-flex flex-column">
            <label for="descrizione">Descrizione</label>
            <textarea name="descrizione" id="descrizione" width="100%" rows="5" required>{{ $type->descrizione }}</textarea>
        </div>
        <div class="d-flex flex-row gap-2">
            <input type="submit" class="btn btn-outline-success w-50" value="Salva">
            <a href="{{ route('types.index') }}" class="btn btn-outline-secondary w-50">Indietro</a>
        </div>
    </form>

@endsection
