@extends('layouts.public')

@section('content')
    <section>
        <div class="container-fluid vw-100 p-0">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1 class="my-3">Add a new Comic:</h1>
                    <form class="mb-5" action="{{ route('comics.store') }}" method="POST">
                        @csrf

                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="'Iron Man'">
                        </div>
                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="2"></textarea>
                        </div>
                        {{-- Thumb --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Comic's Image</label>
                            <input type="text" class="form-control" name="thumb" placeholder="https:....">
                        </div>
                        {{-- Price --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" placeholder="25.00">
                        </div>
                        {{-- Sale Date --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sale Date</label>
                            <input type="text" class="form-control" name="sale_date" placeholder="2020-05-25">
                        </div>
                        {{-- Series --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series" placeholder="'Action Comics'">
                        </div>
                        {{-- Type --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" placeholder="'Comic Book'">
                        </div>
                        {{-- Artist --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Artists</label>
                            <input type="text" class="form-control" name="artists" placeholder="'Stan Lee'">
                        </div>
                        {{-- Writer --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Writers</label>
                            <input type="text" class="form-control" name="writers" placeholder="'Stan Lee'">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
