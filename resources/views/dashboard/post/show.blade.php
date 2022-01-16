@extends('dashboard.layout.main')
@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col">
        <table>
        <th>
            <a class="badge bg-info text-decoration-none" href="/dashboard/posts/"><span data-feather="arrow-left"></span> Kembali Ke Post</a>
            <a class="badge bg-warning text-decoration-none" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0 text-decoration-none" onclick="return confirm('Yakin hapus data')"><span data-feather="x-circle"></span> Hapus</button>
            </form>
        </th>
        <tr>
            <th class="text-center">
                <a style="font-size: large">{{ $post->judul }}</a>
            </th>
        </tr>
        <tr>
            <th>
                @if ($post->gambar)
                <img src="{{ asset('storage/'.$post->gambar) }}" class="card-img-top" width="800" height="400" alt="{{ $post->kategory->slug }}">
                @else
                <img src="/img/{{ $post->kategory->slug }}.jpg" class="card-img-top" width="800" height="400" alt="{{ $post->kategory->slug }}">
                @endif
            </th>
        </tr>
        <tr>
        </tr>
        <tr>
            <th><a>{{ $post->penulis }}</a></th>
        </tr>
        <tr>
        <td>
        <p>{!! $post->isipost !!}</p>
        </td>
        </tr>
    </table>
        </div>
    </div>
</div>
@endsection
