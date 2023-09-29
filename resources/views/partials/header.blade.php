@php
    $navLinks = [['name' => 'CHARACTER'], ['name' => 'COMICS'], ['name' => 'MOVIES'], ['name' => 'TV'], ['name' => 'GAMES'], ['name' => 'COLLECTIBLES'], ['name' => 'VIDEOS'], ['name' => 'FANS'], ['name' => 'SHOP']];
@endphp

<header>
    <div class="container-fluid p-0 vw-100 bg-white">
        <div class="row justify-content-center primary-header w-100">
            <div class="col-8 text-white">
                <div class="d-flex justify-content-end gap-5 fw-medium">
                    <div>DC POWER VISA</div>
                    <div>ADDITIONAL DC SITES</div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center secondary-header">
            <div class="col-8">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div href="/" class="d-flex align-items-center my-3 link-body-emphasis text-decoration-none">
                        <img src="/imgs/dc-logo.png" alt="Logo" height="80px">
                    </div>

                    <div>
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 gap-2">
                            @foreach ($navLinks as $link)
                                <li><a href="#" class="nav-link px-2 text-black">{{ $link['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <form class=" d-flex align-items-center col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                        <input type="search" class="search-bar form-control border-0 rounded-0 border-bottom pe-0"
                            placeholder="Search..." aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
