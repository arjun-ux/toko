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
            {{-- <form class="form d-flex" method="GET" action="{{ route('cari') }}" role="search">
            </form> --}}

            {{-- input ke ajax dengan id=input --}}
            <input class="form-control form-control-sm" type="search" id="input" name='cari' style="height: 20px;" placeholder="Search...">
            </div>
        </div>


        {{-- hasil dari pencarian menggunakan ajax dengan id=read --}}
        <div class="row justify-content-center" id="read">
        @foreach($data as $barang)
            <div class="col-md-3 mt-3">

                <div class="d-flex" >
                    <div class="card" style="width: 500px; ">
                        <img src="{{ asset('storage/toko/'.$barang->gambar) }}" class="flex img-thumbnail card-img-top" alt="{{ $barang->nama_barang }}" width="900px" height="400px">
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

    {{-- <div class="mt-2">
        {{ $data->links() }}
    </div> --}}
@endsection
