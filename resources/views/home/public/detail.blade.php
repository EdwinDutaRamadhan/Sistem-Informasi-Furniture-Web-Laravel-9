@extends('home.layout.main')

@section('body')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/gambar1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h5>{{ $data->id }}</h5>
        </div>
    </div>
@endsection