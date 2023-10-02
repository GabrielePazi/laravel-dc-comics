@php
    $shopBarLinks = [['name' => 'DIGITAL COMICS', 'image' => 'imgs/buy-comics-digital-comics.png'], ['name' => 'SHOP DC', 'image' => 'imgs/buy-comics-merchandise.png'], ['name' => 'COMIC SHOP LOCATOR', 'image' => 'imgs/buy-comics-shop-locator.png'], ['name' => 'SUBSCRIPTION', 'image' => 'imgs/buy-comics-subscriptions.png']];
@endphp

@extends('layouts.public')

@section('content')
    {{-- @dump($comic) --}}

    {{-- first section with price, description and adv --}}
    <section>
        <div class="bg-primary-blue vw-100 blue-bar"></div>

        <div class="container-fluid vw-100 p-0">
            <div class="row justify-content-center">
                <div class="col-7">
                    <div class="position-relative mb-5">
                        <img src="{{ $comic->thumb }}" class="position-absolute comic-thumb">
                    </div>


                    <div class="py-5 d-flex align-items-start">
                        <div class="main-content">
                            <h3>{{ $comic->title }}</h3>

                            <div class="green-bar w-100 d-flex">
                                <div class="price p-3 d-flex justify-content-between fw-medium">
                                    <div class="text-white"><span class="availability-green">U.S. Price:
                                        </span>{{ $comic->price }}$</div>
                                    <div class="availability-green">AVAILABLE</div>
                                </div>

                                <div class="availability p-3 text-white">
                                    Check Availability
                                </div>
                            </div>

                            <div class="mt-3">{{ $comic->description }}</div>
                        </div>

                        <div class="main-adv ps-5">
                            <div class="text-secondary w-100 text-end fw-semibold">ADVERTISEMENT</div>
                            <a href="#"><img class="w-100" src="imgs/adv.jpg" alt=""></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{-- second section with other info abt the comic --}}
    <section>
        <div class="container-fluid vw-100 p-0 bg-light border-top pt-4">
            <div class="row justify-content-center">
                <div class="col-7">
                    <div class="d-flex gap-4">
                        {{-- left part --}}
                        <div class="w-50">
                            <h3>Talent</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-light d-flex">
                                    <div style="width: 33%">Art by:</div>
                                    <div style="width: 67%">
                                        @for ($i = 0; $i < count(json_decode($comic->artists)); $i++)
                                            @if ($i != count(json_decode($comic->artists)) - 1)
                                                <span class="text-primary">{{ json_decode($comic->artists)[$i] }}</span>,
                                            @else
                                                <span class="text-primary">{{ json_decode($comic->artists)[$i] }}</span>
                                            @endif
                                        @endfor
                                    </div>
                                </li>
                                <li class="list-group-item bg-light d-flex border-bottom">
                                    <div style="width: 33%">Art by:</div>
                                    <div style="width: 67%">
                                        @for ($i = 0; $i < count(json_decode($comic->writers)); $i++)
                                            @if ($i != count(json_decode($comic->writers)) - 1)
                                                <span class="text-primary">{{ json_decode($comic->writers)[$i] }}</span>,
                                            @else
                                                <span class="text-primary">{{ json_decode($comic->writers)[$i] }}</span>
                                            @endif
                                        @endfor
                                    </div>
                                </li>
                            </ul>
                        </div>

                        {{-- right part --}}
                        <div class="w-50">
                            <h3>Specs</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-light d-flex">
                                    <div style="width: 33%">Series:</div>
                                    <div style="width: 67%">
                                        {{ $comic->series }}
                                    </div>
                                </li>
                                <li class="list-group-item bg-light d-flex">
                                    <div style="width: 33%">Price: </div>
                                    <div style="width: 67%">
                                        {{ $comic->price }}$
                                    </div>
                                </li>
                                <li class="list-group-item bg-light d-flex border-bottom">
                                    <div style="width: 33%">Sale Date: </div>
                                    <div style="width: 67%">
                                        {{ $comic->sale_date }}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-100 text-center mt-5 mb-3">
                        <a href="comics.index"><button class="btn btn-primary">HOME</button></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid p-0 vw-100">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="shop d-flex justify-content-evenly gap-5">
                        @foreach ($shopBarLinks as $shopBarLink)
                            <div class="d-flex align-items-center gap-3">
                                <img class="shop-icon" src="{{ $shopBarLink['image'] }}" alt="" style="opacity: 1">
                                <div class="text-secondary">{{ $shopBarLink['name'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
