@extends('layouts.auth-master')

@section('content')
<form action="/register" method="POST">
    @csrf
    <h1>Create Account</h1>
    @include('layouts.partials.messages')
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password Confirmation</label>
    </div>
    <div class="mb-3">
        <a href="/login">Login</a>
    </div>
    <button type="submit" class="btn btn-primary" style="width: 100%;">Create Account</button>
</form>
@endsection