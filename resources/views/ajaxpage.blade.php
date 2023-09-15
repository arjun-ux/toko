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
