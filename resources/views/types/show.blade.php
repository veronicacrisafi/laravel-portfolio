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
                        <a class="btn btn-outline-warning me-5 w-50" href="">Modifica</a>
                        <button type="button" class="btn btn-outline-danger w-50" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Elimina
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
