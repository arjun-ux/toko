@extends('dashboard.layouts.main')

@section('konten')
    
    <div class="container-fluid p-0">
    <div class="shadow p-3 mb-4 bg-body rounded fw-bold">
       My Profile
    </div>
        <div class="row">
            <div class="col-md-3 text-center mb-2">
                <img class="img-thumbnail rounded" src="img/pondo.png" alt="Foto Admin">
            </div>

            <div class="col-md-auto">
                <div class="row mb-2">
                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="text" readonly class="form-control" id="name" value=": {{ Auth::user()->name }}" >
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="text" readonly class="form-control" id="email" value=": {{ Auth::user()->email }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection