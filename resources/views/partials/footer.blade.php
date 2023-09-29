@php
    $footerLinks = [
        'dc comics' => [['name' => 'Character'], ['name' => 'Comics'], ['name' => 'Movies'], ['name' => 'TV'], ['name' => 'Games'], ['name' => 'Videos'], ['name' => 'News']],
        'shop' => [['name' => 'Shop DC'], ['name' => 'Shop DC Collectibles']],
        'dc' => [['name' => 'Terms of Use'], ['name' => 'Privacy Policy'], ['name' => 'Ad Choices'], ['name' => 'Advertising'], ['name' => 'Jobs'], ['name' => 'Subscriptions'], ['name' => 'Talent Workshop'], ['name' => 'CPSC Certificates'], ['name' => 'Ratings'], ['name' => 'Shop Help'], ['name' => 'Contact us']],
        'sites' => [['name' => 'DC'], ['name' => 'Mad Magazine'], ['name' => 'DC Kids'], ['name' => 'DC Universe'], ['name' => 'DC Power Vise']],
    ];
@endphp

<footer>
    <div class="container-fluid p-0 vw-100">
        <div class="row py-4">
            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white fw-bolder">DC COMICS</h5>
                <ul class="nav flex-column">
                    @foreach ($footerLinks['dc comics'] as $firstUlLink)
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-secondary">{{ $firstUlLink['name'] }}</a></li>
                    @endforeach
                </ul>

                <h5 class="text-white fw-bolder">SHOP</h5>
                <ul class="nav flex-column">
                    @foreach ($footerLinks['shop'] as $secondUlLink)
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-secondary">{{ $secondUlLink['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white fw-bolder">DC</h5>
                <ul class="nav flex-column">
                    @foreach ($footerLinks['dc'] as $thirdUlLink)
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-secondary">{{ $thirdUlLink['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white fw-bolder">SITES</h5>
                <ul class="nav flex-column">
                    @foreach ($footerLinks['sites'] as $fourthUlLink)
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-secondary">{{ $fourthUlLink['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="social-container d-flex flex-wrap justify-content-between align-items-center py-3">
        <div>
            <button class="btn border-primary rounded-0 text-white fw-semibold">SIGN-UP NOW!</button>
        </div>

        <ul class="nav col-md-4 justify-content-end align-items-center list-unstyled d-flex">
            <div class="text-primary fw-bold fs-5">FOLLOW US</div>
            <li class="ms-3"><a class="text-white" href="#"><img src="imgs/footer-facebook.png"
                        alt="facebook"></a></li>
            <li class="ms-3"><a class="text-white" href="#"><img src="imgs/footer-twitter.png"
                        alt="twitter"></a>
            </li>
            <li class="ms-3"><a class="text-white" href="#"><img src="imgs/footer-youtube.png"
                        alt="youtube"></a>
            </li>
            <li class="ms-3"><a class="text-white" href="#"><img src="imgs/footer-pinterest.png"
                        alt="pinterest"></a></li>
            <li class="ms-3"><a class="text-white" href="#"><img src="imgs/footer-periscope.png"
                        alt="periscope"></a></li>
        </ul>
    </div>
</footer>
