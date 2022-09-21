@extends('layouts.main')

@section('main-content')
    <main class="main-content">
        <div class="container">
            <div class="d-flex">

                @forelse($comics as $comic)
                    <div class="comics-card">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comics">
                        </a>
                        <strong>
                            <p>{{ $comic->series }}</p>
                        </strong>
                        <p>{{ $comic->title }}</p>
                        <p>{{ $comic->type }}</p>
                        <p>{{ $comic->price }}</p>
                        <p>{{ $comic->sale_date }}</p>
                    </div>
                @empty
                    <h2>Attualmente non sono presenti fumetti</h2>
                @endforelse
            </div>
            <div class="text-center">
                <a href="{{ route('comics.create') }}" class="btn btn-primary my-5">Aggiungi un nuovo fumetto</a>
            </div>
        </div>
    </main>
@endsection
