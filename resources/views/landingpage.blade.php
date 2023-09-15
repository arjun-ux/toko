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
            <div class="col-md-3 mt-3">
                <div class="flex" >
                    <div class="card">
                        <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="flex img-thumbnail card-img-top" alt="{{ $barang->nama_barang }}" style="width: 250px; height: 250px;">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h6><b>{{ $barang->nama_barang }}</b></h6>
                            </div>
                            <h5 class="card-text">Rp. {{ $barang->harga }}</h5>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <div class="mt-2">
        {{ $data->links() }}
    </div>



@endsection
