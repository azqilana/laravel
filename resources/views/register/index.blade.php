@extends('layout.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
<main class="form-register mt-3">
        <h1 class="text-center">Register</h1>
    <form action="/register" method="POST">
    @csrf
        <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid
        @enderror" name="name" id="name" placeholder="name@example.com" value="{{ old('name') }}" required>
        <label for="name">Nama</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid
        @enderror" name="username" id="username" placeholder="username" value="{{ old('username') }}" required>
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid
        @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid
        @enderror" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    </form>
    <p class="d-block text-center mt-2"> Already Account <a href="/login">Login</a></p>
</main>
        </div>
    </div>
</div>
@endsection
