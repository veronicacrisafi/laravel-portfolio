@extends('layouts.types')

@section('title', 'Tipologia')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-5">{{ $type->nome }}</h4>

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
