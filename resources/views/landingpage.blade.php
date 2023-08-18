@extends('main')

@section('content')

    <div class="container-fluid">
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
        <div class="row justify-content-center">
        @foreach($data as $barang)
            <div class="col-md-2 mt-3">
                <div class="card">
                    <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="img-thumbnail card-img-top" alt="foto makanan" style="height: auto; width: 100%;">
                    <div class="card-body text-center">
                        <div class="card-title">
                            <h6>{{ $barang->nama_barang }}</h6>
                        </div>
                        <h5 class="card-text">Rp. {{ $barang->harga }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
