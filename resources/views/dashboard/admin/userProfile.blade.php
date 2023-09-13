@extends('dashboard.layouts.main')

@section('konten')
    
    <div class="container-fluid p-0">
    <div class="shadow p-3 mb-5 bg-body rounded fw-bold">
       My Profile
    </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="img-thumbnail rounded" src="img/pondo.png" alt="Foto Admin">
            </div>
            <div class="col-md-auto">

                <div class="row">
                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="name" value=": {{ Auth::user()->name }}" >
                    </div>
                </div>
                <div class="row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="email" value=": {{ Auth::user()->email }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection