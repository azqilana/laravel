<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['judul','excerpt','isipost'];
    protected $guarded = ['id'];
    protected $with=['user','kategory'];

    public function kategory(){
        return $this->belongsTo(kategory::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
