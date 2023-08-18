@extends('dashboard.layouts.main')

@section('konten')
    <h3 class="card-title">Tambah Data Barang</h3>
    <form action="{{ route('barang.store') }}" method='POST' enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label class="form-label">Barcode</label>
            <input type="number" name="barcode" class="form-control" placeholder="Barcode">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="Harga">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control" placeholder=".jpg .png">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" href="/barang">Cancel</a>
    </form>
@endsection
