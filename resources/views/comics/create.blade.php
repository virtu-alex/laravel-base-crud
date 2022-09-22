@extends('layouts.main')


@section('main-content')
<div class="container bg-create bg-dark">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="row my-4 g-2 p-5">
            <div class="col">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Type" name="type">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Thumb" name="thumb">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Series" name="series">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Sale Date" name="sale_date">
            </div>
            <div class="col-12">
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>
            
            <div class="col-12 text-center pt-3">
                <button type="submit" class="btn btn-warning border">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
