@extends('layouts.types')

@section('title', ' Le mie tipologie!')

@section('content')
    <div class="row">
        @foreach ($types as $type)
            <div class="col-4 my-3">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <div class="card-title text-center my-5">
                            <h1> {{ $type->nome }}</h1>
                        </div>
                        <div class="card-subtitle">
                            <p>{{ $type->descrizione }}</p>
                        </div>
                        <div class="mt-auto">
                            <a class='btn btn-outline-primary w-100'
                                href="{{ route('types.show', $type->id) }}">Visualizza</a>
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
        @endforeach
    </div>

@endsection
