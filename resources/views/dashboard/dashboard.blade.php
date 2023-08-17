@extends('dashboard.layouts.main')

@section('konten')
    <h1>Selamat Datang, <b>{{ Auth::user()->name }}</b> </h1>
@endsection
