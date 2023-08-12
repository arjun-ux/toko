@extends('dashboard.layouts.main')

@section('konten')
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title">Detail Barang, <span class="fst-italic fw-bold">{{ $barang->nama_barang }}</span></h3><br>
        </div>
        <div class="col-md-3 text-center">
            <a class='btn btn-sm ' href="{{ route('barang.edit', $barang->id) }}"><i data-feather="settings"></i></a>
            <a class='btn btn-sm ' href="/barang"><i data-feather="x"></i></a>
        </div>
                
    </div>
        <div class="row">
        <div class="col-md-4 mb-2 mt-3 text-center">
            <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="img-thumbnail card-img-top" alt="foto makanan" style="width: 180px; height: 150px">
        </div>
        <div class="col-md-8 mb-2 mt-3 text-center">
            <h4>Nama Barang : {{ $barang->nama_barang }} </h4>
            <h5>Harga Jual : Rp. {{ $barang->harga }}</h5>
            <h5>Harga Beli : Rp. </h5>
        </div>
    </div>

    

@endsection