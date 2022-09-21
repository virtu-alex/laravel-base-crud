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
@endsection