@extends('main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mb-3 mt-3">
                <img class='img-fluid' src="img/pondo.png" alt="logo" width='120'>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
            <form class="form d-flex" method="GET" action="{{ route('cari') }}" role="search">
                <input class="form-control form-control-sm" type="search" placeholder="Search..." name='cari' style="height: 20px;">
            </form>
            </div>
        </div>
        <div class="row">
        @foreach($data as $barang)
            <div class="col-md-3 mt-3">
                <div class="card">
                    <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="img-thumbnail card-img-top" alt="foto makanan" style="height: 180px">
                    <div class="card-body text-center">
                        <div class="card-title">
                            <h5>{{ $barang->nama_barang }}</h5>
                        </div>
                        <h6 class="card-text">Rp. {{ $barang->harga }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    
@endsection