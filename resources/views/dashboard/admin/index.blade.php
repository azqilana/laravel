{{-- @dd($post) --}}
@extends('dashboard.layout.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategory Post</h1>
    </div>
    <div class="col-lg-8">
@if (session()->has('berhasil'))
<div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    </div>
        <div class="table-responsive col-lg-8">
            <a href="/dashboard/kategory/create" class="btn btn-primary text-decoration-none"> Buat Kategory</a>
            @if (count($kategory) > 0)
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategory</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($kategory as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->name }}</td>
                <td>
                    <a class="badge bg-info" href="/dashboard/kategory/{{ $k->slug }}"><span data-feather="eye"></span></a>
                    <a class="badge bg-warning" href="/dashboard/kategory/{{ $k->slug }}/edit"><span data-feather="edit"></span></a>
                    <form action="/dashboard/kategory/{{ $k->slug }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0 text-decoration-none" onclick="return confirm('Yakin hapus data')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            @endif
        </div>
@endsection

