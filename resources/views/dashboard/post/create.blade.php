@extends('dashboard.layout.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Postingan Baru</h1>
    </div>
<div class="col-lg-8">
<form action="/dashboard/posts" class="mb-5" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid
        @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
        @error('judul')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid
        @enderror" id="slug" name="slug" value="{{ old('slug') }}" readonly required>
        @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="kategory" class="form-label">kategory</label>
        <select class="form-select" name="kategory_id">
            @foreach ($kategory as $k )
            @if (old('kategory_id') == $k->id)
            <option value="{{ $k->id }}" selected>{{ $k->name }}</option>
            @else
            <option value="{{ $k->id }}">{{ $k->name }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <img class="img-review img-fluid mb-3 col-sm-5">
    <input class="form-control  @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" required onchange="previewimg()">
        @error('gambar')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="isipost" class="form-label">Post</label>
        <input id="isipost" class=" @error('isipost') is-invalid
        @enderror" type="hidden" name="isipost" value="{{ old('isipost') }}" required>
        <trix-editor input="isipost"></trix-editor>
        @error('isipost')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Publish Post</button>
</form>
</div>
<script src="/js/script.js"></script>
@endsection
