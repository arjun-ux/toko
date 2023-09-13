@extends('dashboard.layouts.main')

@section('konten')
    @if ($pesan = Session::get('success'))
        <div class="alert alert-success">
            {{ $pesan }}
        </div>
    @endif

        <div class="alert alert-warning">
            Aplikasi Sudah Bisa Digunakan, Tetapi Masih Dalam <b>Pengembangan</b>
        </div>
    </div>
@endsection
