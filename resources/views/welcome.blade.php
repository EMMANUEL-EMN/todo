@extends('layouts.master')


@section('title', 'home')

@section('content')


    <form action="{{ route('user.login') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="jumbotron">
            <center>
                <div class="login bg-white p-5">
                    <div class="logo">
                        <center>
                            <img src="{{ url('storage/images/ESE.png') }}" alt="" class="img-fluid">
                        </center>
                    </div>
                    <hr>
                    @if (session()->has('status'))
                        <p class="alert alert-danger alert-dismissible">
                            {{ session('status') }}
                            <button class="close" data-dismiss="alert">&times;</button>
                        </p>
                    @endif
                    <div class="linfo">
                        <p>Email</p>
                        <p>
                            <input type="email" name="email" id="email">
                        </p>
                        <p>Password</p>
                        <p>
                            <input type="password" name="password" id="password">
                        </p>
                        <p>
                            <button class="btn btn-light">Login</button>
                        </p>
                        <p>
                            Don`t have account? <a href="/register">Register</a>
                        </p>
                    </div>
                </div>
            </center>
        </div>
    </form>
@endsection
