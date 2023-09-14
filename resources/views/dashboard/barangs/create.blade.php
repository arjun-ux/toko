@extends('dashboard.layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Data Barang</h1>
                </div>
                <div class="card-body">
                @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{session()->get('pesan') }}
                    </div>			
                @endif
                <form action="{{ route('barang.store') }}" method='POST' enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="barcode" class="form-label">Barcode</label>
                        <input type="number" name="barcode" id="barcode" class="form-control" placeholder="Barcode">
                    </div>
                    <div class="mb-3">
                        <label for="Namabarang" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" id="Namabarang" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label for="hargabarang" class="form-label">Harga</label>
                        <input type="number" name="harga" id="hargabarang" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="foto" class="form-control" placeholder=".jpg .png">
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="/barang">Cancel</a>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

@endsection
