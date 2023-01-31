@extends('home.layout.main')

@section('title', 'Title Home')

@section('body')
    {{-- Banner --}}
    <div class="row p-4 p-md-5 mb-4 text-white rounded bg-secondary">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Home Decoration</h1>
            <p class="lead my-3">Dekorasi rumah menjadi lebih indah</p>
            <p class="lead mb-0"><a href="#" class="btn btn-dark rounded-0 px-5">Shop Now</a></p>
        </div>
        <div class="col-md-6">
            gambar
        </div>
    </div>

    {{-- 3 Feature --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title">Free Shipping</h6>
                      <p class="card-text">This is a wider </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title">Garansi Produk</h6>
                      <p class="card-text">This is a wider </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title">24/7 Costumer Service</h6>
                      <p class="card-text">This is a wider </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
      <div class="col-md-3 p-3 card border-0">
        <img src="{{ asset('img/gambar1.png') }}" class="card-img-top bg-secondary rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Goyang</h5>
          <p class="card-text">Rp. 100.000,00</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row col-md-6 bg-dark m-4">
        <div class="col-md-5 position-relative">
          <h6 class="position-absolute top-50 start-50 translate-middle text-light">Judul Iklan</h6>
        </div>
        <div class="col-md-7">
          <img src="{{ asset('img/iklan1.png') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
@endsection
