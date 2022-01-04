<?php

use App\Http\Controllers\PostController;
use App\Models\kategory;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/ ', function () {
//     return view('welcome');
// });
Route::get('/ ', function () {

    return view('home',['judul'=>'Home',
    ]
    );
});
Route::get('/about ', function () {
    $data = [
        'nama'=>'Muhammad Azqilana',
        'umur'=>21,
        'email'=>'MAZQULUNU@GMAIL.COM',
        'img'=>'minet.jpg'
    ];
    return view('about',[
    'judul'=>'About',
    'data'=>$data]);
});
Route::get('/blog ',[PostController::class,'index']);
Route::get('/post/{post:slug}', [PostController::class,'post']);
Route::get('/kategories', function (kategory $kategory) {
    return view('kategorie',[
        'judul'=>'Kategory Post',
        'kategory'=>kategory::all(),
    ]
    );
});
Route::get('/penulis/{penulis:name}', function (User $penulis) {
    return view('posts',[
        'judul'=>'User Post',
        'posts'=>$penulis->post->load('kategory','user'),
    ]
    );
});
Route::get('/kategories/{kategory:slug}', function (kategory $kategory) {
    return view('posts',[
        'judul'=>'kategory',
        'name'=>$kategory->name,
        'posts'=>$kategory->posts->load('kategory','user'),
        'kategory'=>$kategory->name,
    ]
    );
});
