{{-- @dd($judul) --}}

@extends('layout.main')
@section('container')
    <h1>Kategory Post</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <table>
            @foreach ($kategory as $k)   
        <tr>
            <th><a href="kategories/{{ $k->slug }}" style="font-size: large">{{ $k->name }}</a></th>
        </tr>
            @endforeach
    </table>
        </div>
    </div>
</div>
@endsection