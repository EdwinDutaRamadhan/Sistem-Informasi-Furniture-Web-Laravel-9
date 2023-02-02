@extends('home.layout.main')

@section('title', 'Title Home')

@section('body')
    {{-- Banner --}}
    {{-- <div class="row p-4 p-md-5 mb-4 text-white rounded bg-secondary">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Home Decoration</h1>
            <p class="lead my-3">Dekorasi rumah menjadi lebih indah</p>
            <p class="lead mb-0"><a href="#" class="btn btn-dark rounded-0 px-5">Shop Now</a></p>
        </div>
        <div class="col-md-6">
            gambar
        </div>
    </div> --}}

    <div class="container">

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/mainBanner1.png') }}" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/mainBanner2.png') }}" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/mainBanner3.png') }}" class="img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- 2 Advertisment  --}}
        <div class="row my-3">
            <div class="col-6">
                <img src="{{ asset('img/adBanner1.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-6">
                <img src="{{ asset('img/adBanner2.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div>

        {{-- 3 Feature --}}
        <div class="row">
            <div class="col-4">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Free Shipping</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Garansi Produk</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">24/7 Costumer Service</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $d)
                <div class="col-sm-3 p-3 card border-0">
                    <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $d->titles }}</h5>
                        <p class="card-text">Rp. {{ number_format($d->prices,2,',','.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
