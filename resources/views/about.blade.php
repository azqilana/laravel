{{-- @dd($data) --}}
@extends('layout.main')
@section('container')
    <h1>Halaman About</h1>
    <a>{{ $data['nama'] }}</a>
    <a>{{ $data['umur'] }}</a>
    <a>{{ $data['email'] }}</a>
    <img src="img/{{ $data['img'] }}" alt="{{ $data['nama'] }}">
@endsection