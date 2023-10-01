@php
    $shopBarLinks = [['name' => 'DIGITAL COMICS', 'image' => 'imgs/buy-comics-digital-comics.png'], ['name' => 'DC MERCHANDISE', 'image' => 'imgs/buy-comics-merchandise.png'], ['name' => 'SUBSCRIPTION', 'image' => 'imgs/buy-comics-subscriptions.png'], ['name' => 'COMIC SHOP LOCATOR', 'image' => 'imgs/buy-comics-shop-locator.png'], ['name' => 'DC POWER VISA', 'image' => 'imgs/buy-dc-power-visa.svg']];
@endphp

@extends('layouts.public')

@section('content')
    <section>
        <div class="container-fluid vw-100 homepage-container p-0">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="position-relative">
                        <button class="button-primary btn-top position-absolute top-0">CURRENT SERIES</button>
                    </div>
                    <div class="card-container d-flex justify-content-center flex-wrap gap-4 py-5">
                        @foreach ($comics as $comic)
                            @include('partials.card')
                        @endforeach
                        <button class="button-primary fw-semibold">LOAD MORE</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary">
        <div class="container-fluid p-0 vw-100">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="shop d-flex justify-content-evenly gap-5">
                        @foreach ($shopBarLinks as $shopBarLink)
                            <div class="d-flex align-items-center gap-3">
                                <img class="shop-icon" src="{{ $shopBarLink['image'] }}" alt="">
                                <div class="text-white">{{ $shopBarLink['name'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
