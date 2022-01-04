@extends('layout.main')
@section('container')
    <h1>Halaman Post</h1>
<div class="container">
    <div class="row">
        <div class="col">

    @foreach ($posts as $p)
        <table class="mb-5 border-bottom">
        <tr>
            <th><a href="/post/{{ $p->slug }}" style="font-size: large">{{ $p->judul }}</a></th>
        </tr>
        <tr>
            <th>Dari <a href="/penulis/{{ $p->user->name }}">{{ $p->user->name }}</a> in <a href="/kategories/{{ $p->kategory->slug }}" style="font-size: large">{{ $p->kategory->name }}</a></p></th>
        </tr>
        <tr>
            <th><a>{{ $p->penulis }}</a></th>
        </tr>
        <tr>
            <tr>
                <td>
                <p>{{ $p->excerpt }}<a href="/post/{{ $p->slug }}" style="font-size: large">  Read More...</a></p> 
                </td>
            </tr>
        </tr>
    </table>
    @endforeach
        </div>
    </div>
</div>
@endsection