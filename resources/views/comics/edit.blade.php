@extends('layouts.public')

@section('content')
    <section>
        <div class="container-fluid vw-100 p-0">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1 class="my-3">Add a new Comic:</h1>
                    <form class="mb-5" action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf

                        @method('put')
                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="'Iron Man'"
                                value="{{ $comic->title }}">
                        </div>
                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="2"> {{ $comic->description }}"</textarea>
                        </div>
                        {{-- Thumb --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Comic's Image</label>
                            <input type="text" class="form-control" name="thumb" placeholder="https:...."
                                value="{{ $comic->thumb }}">
                        </div>
                        {{-- Price --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" placeholder="25.00"
                                value="{{ $comic->price }}">
                        </div>
                        {{-- Sale Date --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sale Date</label>
                            <input type="text" class="form-control" name="sale_date" placeholder="2020-05-25"
                                value="{{ $comic->sale_date }}">
                        </div>
                        {{-- Series --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series" placeholder="'Action Comics'"
                                value="{{ $comic->series }}">
                        </div>
                        {{-- Type --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" placeholder="'Comic Book'"
                                value="{{ $comic->type }}">
                        </div>
                        {{-- Artist --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Artists</label>
                            <input type="text" class="form-control" name="artists" placeholder="'Stan Lee'"
                                value="{{ implode(',', json_decode($comic->artists)) }}">
                        </div>
                        {{-- Writer --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Writers</label>
                            <input type="text" class="form-control" name="writers" placeholder="'Stan Lee'"
                                value="{{ implode(',', json_decode($comic->writers)) }}">
                        </div>

                        <button type="submit" class="btn btn-warning">Modify</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
