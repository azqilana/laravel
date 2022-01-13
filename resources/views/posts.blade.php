{{-- @dd($posts) --}}
@extends('layout.main')
@section('container')
    <h1>Halaman Post</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog" method="get">
            @if (request('kategories'))
                <input type="hidden" name="kategories" id="kategories" value="{{ request('kategories') }}">
            @endif
            @if (request('penulis'))
                <input type="hidden" name="penulis" id="penulis" value="{{ request('penulis') }}">
            @endif
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="cari" name="keyword" value="{{ request('keyword') }}">
                <button class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count())
        <div class="card mb-3" >
            {{-- <img src="https://api.unsplash.com/photos?query={{ {{ $posts[0]->kategories->name }} }}" class="card-img-top" alt="..."> --}}
            <div class="card-body text-center">
                <h5 class="card-title">{{ $posts[0]->judul }}</h5>
                <small>
                <p>Dari <a href="/blog?penulis={{ $posts[0]->user->name }}">{{ $posts[0]->user->name }}</a> In <a href="/blog?kategories={{ $posts[0]->kategory->slug }}" style="font-size: large">{{ $posts[0]->kategory->name }}</a><a> {{ $posts[0]->created_at->diffForHumans() }}</a></p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt}}</p>
                <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <a class="btn btn-primary" href="/post/{{ $posts[0]->slug }}" style="font-size: large">Read More</a>
            </div>
        </div>
    <div class="container">
        <div class="row">
    @foreach ($posts->skip(1) as $p)
            <div class="col-md-4">
                <div class="card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $p->judul }}</h5>
                    <p>Dari <a href="/blog?penulis={{ $p->user->name }}">{{ $p->user->name }}</a><br>In <a href="/blog?kategories={{ $posts[0]->kategory->slug }}" style="font-size: large">{{ $posts[0]->kategory->name }}</a></p>
                    <p class="card-text">{{ $p->excerpt }}</p>
                    <a href="/post/{{ $p->slug }}" class="btn btn-primary">Read More</a>
                </div>
                </div>
            </div>
    @endforeach
        </div>
    @else
    <p class="text-center">Not Found</p>
    @endif
    </div>
    {{ $posts->links() }}
@endsection
