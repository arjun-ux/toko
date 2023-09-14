@extends('main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-5">
                <div class="card">
                    <div class="col text-center mt-3">
                        <img class="img-fluid mb-3" src="img/pondo.png" alt="logo" width="150">
                    </div>
                    <form method="post" action="{{ route('store') }}">
                        @csrf
                        <div class="mb-3 mx-4">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="name">
                        </div>
                        <div class="mb-3 mx-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3 mx-4">
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" name="password">
                        </div>
                        <button class="btn btn-outline-success mb-4" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
