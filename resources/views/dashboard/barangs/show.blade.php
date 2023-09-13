@extends('dashboard.layouts.main')

@section('konten')
    <div class="row">
        <div class="shadow p-3 mb-4 bg-body rounded">
            <div class="row">
                <div class="col">
                    <a class='btn btn-sm btn-danger ' href="/barang"><i data-feather="x" width="18"></i></a>    
                    <a class='btn btn-sm btn-warning ' href="{{ route('barang.edit', $barang->id) }}"><i data-feather="settings" width="18"></i></a>

                    Detail Barang, <span class="fst-italic fw-bold">{{ $barang->nama_barang }}</span>
                </div>

            </div>

        </div> 
    </div>

        <div class="row">
            <div class="col-md-4 mb-2 mt-3 text-center">
                <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="img-thumbnail card-img-top" alt="foto makanan" style="width: 180px; height: 150px">
            </div>
            <div class="col-md-8 mb-2 mt-3 text-center">
                <h4>Nama Barang : {{ $barang->nama_barang }} </h4>
                <h5>Harga Jual : Rp. {{ $barang->harga }}</h5>
            </div>
        </div>


    

@endsection