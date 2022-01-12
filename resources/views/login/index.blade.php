@extends('layout.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
@if (session()->has('berhasil'))
<div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('gagal'))
<div class="alert mt-2 alert-danger alert-dismissible fade show" role="alert">
    {{ session('gagal') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<main class="form-signin mt-3">
        <h1 class="text-center">Login</h1>
    <form action="/login" method="post">
        @csrf
        <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid
        @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="password" class="form-control  @error('password') is-invalid
        @enderror" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
    <p class="d-block text-center">Don't Already Account <a href="/register">Register</a></p>
</main>
        </div>
    </div>
</div>
@endsection
