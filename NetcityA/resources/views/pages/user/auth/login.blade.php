@extends('layouts.appLogReg')

@section('Login')
    <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <div class="login">
            <form action="" method="POST">
                @csrf
                <h1 class="title">LOGIN</h1>
                <div class="text-input">
                    <i class="ri-user-fill"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="text-input">
                    <i class="ri-lock-fill"></i>
                    <input type="password" placeholder="Password">

                </div>

                <button class="login-btn">LOGIN</button>
                <a href="#" class="forgot">Forgot Username/Password?</a>
                <div class="create">
                    <a href="#">Create Your Account</a>
                    <i class="ri-arrow-right-fill"></i>
                </div>
            </form>
        </div>
    </div>
@endsection
