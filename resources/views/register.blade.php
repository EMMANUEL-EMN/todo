@extends('layouts.master')


@section('title', 'home')

@section('content')


    <form action="{{ route('user.reg') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="jumbotron">
            <center>
                <div class="login bg-white p-5">
                    <div class="logo">
                        <center>
                            <img src="{{ url('storage/images/ESE.png') }}" alt="" class="img-fluid">
                            <h5>CREATE ACCOUNT</h5>
                        </center>
                    </div>
                    <hr>
                    @if (session()->has('status'))
                        <p class="alert alert-success alert-dismissible">
                            {{ session('status') }}
                            <button class="close" data-dismiss="alert">&times;</button>
                        </p>
                    @endif
                    @if (session()->has('info'))
                        <p class="alert alert-danger alert-dismissible">
                            {{ session('info') }}
                            <button class="close" data-dismiss="alert">&times;</button>
                        </p>
                    @endif
                    <div class="linfo">
                        <p>Full Name</p>
                        <p>
                            <input type="text" name="name" id="name" required>
                        </p>
                        <p>Email</p>
                        <p>
                            <input type="email" name="email" id="email" required>
                        </p>
                        <p>Password</p>
                        <p>
                            <input type="password" name="password" id="password" required>
                        </p>
                        <p>
                            <button class="btn btn-success">Register</button>
                        </p>
                        <p>
                            Already have account? <a href="/">Login</a>
                        </p>
                    </div>
                </div>
            </center>
        </div>
    </form>
@endsection
