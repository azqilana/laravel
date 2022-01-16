<?php

namespace App\Models;

use PhpParser\Node\Expr\Isset_;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['judul','excerpt','isipost'];
    protected $guarded = ['id'];
    protected $with=['user','kategory'];

    public function scopeFilter($query, array $filter){
        $query->when($filter['keyword']??false,function($query,$search){
        return $query->where('judul','like','%'.$search.'%')
            ->orWhere('isipost','like','%'.$search.'%');
        });
        $query->when($filter['kategories']??false, function($query,$kategory){
            return $query->whereHas('kategory',function($query)use($kategory){
                $query->where('slug',$kategory);
            });
        });
        $query->when($filter['penulis']??false, fn($query,$penulis)=>
        $query->whereHas('User',fn($query)=>
        $query->where('name',$penulis)
        ));
    }

    public function kategory(){
        return $this->belongsTo(kategory::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
        public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
