@extends('dashboard.layouts.main')

@section('konten')
    <a href="#">User</a>
    <a href="/barang">Daftar Barang</a>
    <a href="{{ route('logout') }}">logout</a>
    <h1>halaman dashboard</h1>
@endsection
