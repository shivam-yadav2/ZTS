@extends('master.layout')


@section('style')
    <style>
        body {
            background: #f8f9fa;
        }
        .login-card {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background: #fff;
        }
        .login-card h3 {
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }
        .btn{
            width: 100%;
            background-color: #343B4A;
            color: white;
        }
    </style>
    @endsection
   @section('content')
    <div class="login-card">
        <h3>Login</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <small>{{ $errors->first() }}</small>
            </div>
        @endif
        <form method="POST" action="{{ url('loginCheck') }}">
            @csrf
            <div class="mb-1">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
 @endsection