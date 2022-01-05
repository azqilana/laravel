<?php

namespace App\Models;

use PhpParser\Node\Expr\Isset_;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['judul','excerpt','isipost'];
    protected $guarded = ['id'];
    protected $with=['user','kategory'];
    
    public function scopeFilter($query, array $filter){
        $query->when($filter['keyword'] ?? false, function($query, $search){
            return $query->where('judul','like','%'.$search.'%')
                ->orWhere('isipost','like','%'.$search.'%');
        });
        $query->when($filter['kategories'] ?? false, fn($query, $kategory)=>
        $query->whereHas('kategory',fn($query)=>
        $query->where('slug',$kategory)
        )
        );
        $query->when($filter['penulis'] ?? false, fn($query, $penulis)=>
        $query->whereHas('user',fn($query)=>
        $query->where('name',$penulis)
        )
        );
    }

    public function kategory(){
        return $this->belongsTo(kategory::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
