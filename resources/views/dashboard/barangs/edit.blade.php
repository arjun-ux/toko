@extends('dashboard.layouts.main')

@section('konten')
    <h3 class="card-title">Edit Data Barang</h3>
    @if(session()->has('pesan'))
        <div class="alert alert-success">
            {{session()->get('pesan') }}
        </div>			
    @endif
    <form action="{{ route('barang.update', $barang->id) }}" method='POST' enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label class="form-label">Barcode</label>
            <input type="text" name="barcode" class="form-control" value="{{ old('barcode', $barang->barcode) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang', $barang->nama_barang) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga', $barang->harga) }}">
        </div>
        <div class="mb-3">
            <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="img-thumbnail rounded mb-1" style="width: 200px">
            <input type="file" name="gambar" class="form-control">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" href="/barang">Cancel</a>
    </form>
@endsection
