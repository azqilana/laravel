@extends('layout.main')
@section('container')
    <h1>Halaman Post</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <table>
        <tr>
            <th><a style="font-size: large">{{ $posts->judul }}</a></th>
        </tr>
        <tr>
            <th>
                @if ($posts->gambar)
                <img src="{{ asset('storage/'.$posts->gambar) }}" class="card-img-top" width="800" height="400" alt="{{ $posts->kategory->slug }}">
                @else
                <img src="/img/{{ $posts->kategory->slug }}.jpg" class="card-img-top" width="800" height="400" alt="{{ $posts->kategory->slug }}">
                @endif
            </th>
        </tr>
        <tr>
        <th>
            <p>Dari <a href="/blog?penulis={{ $posts->user->name }}">{{ $posts->user->name }}</a> In <a href="/blog?kategories={{ $posts->kategory->slug }}" style="font-size: large">{{ $posts->kategory->name }}</a></p>
        </th>
        </tr>
        <tr>
            <th><a>{{ $posts->penulis }}</a></th>
        </tr>
        <tr>
            <tr>
                <td>
                <p>{!! $posts->isipost !!}</p>
                <a href="/blog">Kembali ke beranda</a>
                </td>
            </tr>
        </tr>
    </table>
        </div>
    </div>
</div>
@endsection

