@extends('dashboard.layouts.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
                <div class="card-body">
                @if ($pesan = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $pesan }} <br>
                        Selamat Datang <strong>{{ Auth::user()->name }}</strong> 
                    </div>
                @endif

                    <div class="alert alert-warning">
                        Aplikasi Sudah Bisa Digunakan, Tetapi Masih Dalam <b>Pengembangan</b>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection