@extends('layouts.types')

@section('title', ' Le mie tipologie!')

@section('content')
    <div class="row">
        @foreach ($types as $type)
            <div class="col-4 my-3">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <div class="card-title mb-5">{{ $type->nome }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
