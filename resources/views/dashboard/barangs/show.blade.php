@extends('dashboard.layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow">
                    <h1 class="h3 mb-0 text-gray-800">Detail Barang, {{ $barang->nama_barang }}</h1>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('barang.edit', $barang->id) }}">Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/barang">Cancel</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2 mt-3 text-center">
                            <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="img-thumbnail card-img-top" 
                            alt="foto makanan" style="width: 180px; height: 150px">
                        </div>
                        <div class="col-md-8 mb-2 mt-3 text-center">
                            <h4>Nama Barang : {{ $barang->nama_barang }} </h4>
                            <h5>Harga Jual : Rp. {{ $barang->harga }}</h5>
                        </div>
                    </div>
                </div>
            </div>                              
        </div>
    </div>
</div>




@endsection