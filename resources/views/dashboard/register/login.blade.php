@extends('main')

@section('content')

@if ($pesan = Session::get('success'))
        <div class="alert alert-success">
            {{ $pesan }}
        </div>
    @endif
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-5">
                <div class="card">
                    <div class="col text-center mt-3">
                        <img class="img-fluid mb-3" src="img/pondo.png" alt="logo" width="150">
                    </div>
                        @if (session()->has('pesan'))
                            <div class="alert alert-danger">
                                {{ session()->get('pesan') }}
                            </div>
                        @endif
                    <form action="{{ route('authenticate') }}" method="POST">

                        @csrf
                        <div class="mb-3 mx-4">
                            <input type="email" class="form-control" autofocus placeholder="Email" name="email">
                        </div>
                        <div class="mb-3 mx-4">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button class="btn btn-outline-success mb-4" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
