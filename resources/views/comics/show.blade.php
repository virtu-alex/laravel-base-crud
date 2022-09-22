@extends('layouts.main')

@section('main-content')
    <div class="main-card">
        <img src="{{ $comic->thumb }}" alt="">

        <div>
            {{ $comic->price }}
        </div>

        <div>
            {{ $comic->title }}
        </div>

        <div>
            {{ $comic->sale_date }}
        </div>

        <div>
            {{ $comic->type }}
        </div>
        <div>
            {{ $comic->description }}
        </div>
    </div>
    <div class="row my-3">
        <div class="col-2">
                <a class="text-white btn btn-secondary" href="{{ route('comics.index') }}">Torna indietro</a>
        </div>
        <div class="col-2">
                <a class="text-white btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        </div>
        <div class="col-2">
            <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Cancella</button>
            </form>
        </div>
    </div>
@endsection
