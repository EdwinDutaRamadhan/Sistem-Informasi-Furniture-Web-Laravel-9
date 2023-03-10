@extends('home.layout.main')
@section('title', $data->titles)
@section('body')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->titles }}</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/gambar1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h5>{{ $data->titles }}</h5>

            <div class="my-2">
                <h6>Rp. {{ number_format($data->prices,2,',','.') }}</h6>
            </div>
            <div class="my-4">
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatum veniam ab aliquam nulla unde amet, dignissimos cum quam similique autem recusandae tempore. Libero porro nostrum harum fugiat rerum! Modi dolorum eos voluptatem inventore, tenetur eius odit deserunt maxime adipisci. Veniam minus quibusdam inventore earum!</p>
            </div>

            <div class="d-flex my-2">
                <div class="p-2 flex-fill">
                    <button class="btn btn-outline-dark rounded-0 w-100">Tambah ke Favorite</button>
                </div>
                <div class="p-2 flex-fill">
                    <button class="btn btn-outline-success rounded-0 w-100">Whatsapp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 row">
        @foreach ($dataRecommended as $d)
            <div class="col-sm-3 p-3 card border-0">
                <a href="home/shop/{{ Crypt::encryptString($d->id) }}"><img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $d->titles }}</h5>
                    <p class="card-text">Rp. {{ number_format($d->prices,2,',','.') }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
