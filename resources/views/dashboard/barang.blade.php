@extends('dashboard.layouts.main')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h1>Daftar Harga Barang</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-2">
                <a class="btn btn-primary" href="/barang/create">+ Add</a>
            </div>

            <div class="col-md-6 mb-3">
                <form class="form d-flex" method="GET" action="/barang" role="search">
                    <input class="form-control form-control-sm" type="search" placeholder="Search..." name='cari'>
                    <button class="btn btn-outline-primary mx-1" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Barcode</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangs as $barang)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $barang->barcode }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>Rp. {{ $barang->harga }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info mb-1" href="{{ route('barang.show', $barang->id) }}"><i data-feather="info"></i></a>
                                    <a class='btn btn-sm btn-warning mb-1' href="{{ route('barang.edit', $barang->id) }}"><i data-feather="settings"></i></a>
                                    <button class='btn btn-sm btn-danger mb-1' type="submit"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-2">
            {{ $barangs->links() }}
        </div>
    </div>


@endsection
