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

        <div class="row"> {{-- product sorter --}}
            <div class="col-6">
                <h6 class="fw-bold">Our Product</h6>
            </div>
            <div class="col-6">
                <form id="sorterForm" action="/home/shop/sort" method="post">
                    @csrf
                    <select onchange="document.getElementById('sorterForm').submit()"  class="form-select form-select-sm"
                        aria-label=".form-select-sm example">
                        <option name="sort" value="Latest">Latest</option>
                        <option name="sort" value="Random">Random</option>
                        <option value="Most Sold">Most Sold</option>
                        <option value="Most Favorite">Most Favorite</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="row"> {{-- product --}}
            @foreach ($data as $d)
                <div class="col-sm-3 p-3 card border-0">
                    <a href="home/shop/{{ Crypt::encryptString($d->id) }}"><img src="{{ asset('img/gambar1.png') }}"
                            class="card-img-top bg-secondary rounded-0" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $d->titles }}</h5>
                        <p class="card-text">Rp. {{ number_format($d->prices, 2, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
            {{ $data->links() }}
        </div>
    </div>

@endsection
