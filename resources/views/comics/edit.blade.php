@extends('layouts.main')

@section('main-content')
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-2 bg-dark p-5">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Type" name="type"
                        value="{{ $comic->type }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Thumb" name="thumb"
                        value="{{ $comic->thumb }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Price" name="price"
                        value="{{ $comic->price }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Series" name="series"
                        value="{{ $comic->series }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sale Date" name="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Description" name="description"
                        value="{{ $comic->description }}">
                </div>

                <div class="col-12 text-center pt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </form>
    </div>
@endsection
