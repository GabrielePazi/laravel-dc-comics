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
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                placeholder="'Iron Man'" value="{{ old('title', $comic->title) }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="2">{{ old('description', $comic->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Thumb --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Comic's Image</label>
                            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                                placeholder="https:...." value="{{ old('thumb', $comic->thumb) }}">
                            @error('thumb')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Price --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                                placeholder="25.00" value="{{ old('price', $comic->price) }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Sale Date --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sale Date</label>
                            <input type="text" class="form-control @error('sale_date') is-invalid @enderror"
                                name="sale_date" placeholder="2020-05-25" value="{{ old('sale_date', $comic->sale_date) }}">
                            @error('sale_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Series --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Series</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                                placeholder="'Action Comics'" value="{{ old('series', $comic->series) }}">
                            @error('series')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Type --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                                placeholder="'Comic Book'" value="{{ old('type', $comic->type) }}">
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Artist --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Artists</label>
                            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                                placeholder="'Stan Lee'"
                                value="{{ old('artists', implode(',', json_decode($comic->writers))) }}">
                            @error('artists')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Writer --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Writers</label>
                            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                                placeholder="'Stan Lee'"
                                value="{{ old('writers', implode(',', json_decode($comic->writers))) }}">
                            @error('writers')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">Modify</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
