<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\kategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post.index',[
            'judul'=>'Daftar Post',
            'post'=>Post::where('user_id', auth()->user()->id)->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create',['judul'=>'Tambah Data Post',
        'kategory'=>kategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'judul'=>'required|max:255',
            'slug'=>['required','unique:posts'],
            'kategory_id'=>'required',
            'gambar'=>'required|image|file|max:1024',
            'isipost'=>'required'
        ]);
        $validateData['user_id']= auth()->user()->id;
        $validateData['excerpt']= Str::limit(strip_tags($request->isipost), 200, '...');
        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post_images');
        }
        Post::create($validateData);
        return redirect('/dashboard/posts')->with('berhasil','Postingan Berhasil Di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',[
            'judul'=> 'Post',
            'post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit',[
        'judul'=>'Edit Data Post',
        'post'=>$post,
        'kategory'=>kategory::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rule =[
            'judul'=>'required|max:255',
            'kategory_id'=>'required',
            'gambar'=>'required|image|file|max:1024',
            'isipost'=>'required'
        ];

        if ($request->slug != $post->slug) {
            $rule['slug'] = ['required','unique:posts'];
        }

        $validateData = $request->validate($rule);
        $validateData['user_id']= auth()->user()->id;
        $validateData['excerpt']= Str::limit(strip_tags($request->isipost), 200, '...');
        if ($request->file('gambar')) {
            if ($request->gambarlama) {
                Storage::delete($request->gambarlama);
            }
            $validateData['gambar'] = $request->file('gambar')->store('post_images');
        }
        Post::where('id',$post->id)->update($validateData);

        return redirect('/dashboard/posts')->with('berhasil','Postingan Berhasil Di Editkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->gambar) {
                Storage::delete($post->gambar);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('berhasil','Postingan Berhasil Di Hapuskan');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug'=>$slug]);
    }
}
