<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function scopeFilter($query, array $filter){
        $query->when($filter['keyword'] ?? false, function($query, $search){
            $query->where('judul','like','%'.$search.'%')
                ->orWhere('isipost','like','%'.$search.'%');
        });
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
// Post::create([
//     'kategory_id'=>1,
//     'judul'=>'Cara Buat Web E-Commerch',
//     'slug'=>'cara-uat-Web-e-commerch',
//     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint eligendi ipsa porro magnam, enim similique! Esse aliquid culpa dignissimos explicabo dolor voluptatum dolores omnis assumenda adipisci minus mollitia, aut eos.',
//     'isipost'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, harum totam error atque facilis voluptas inventore eos optio. Quidem, optio. Animi architecto, ex suscipit itaque natus consectetur, tempore iusto distinctio fugiat accusantium odio blanditiis deleniti quisquam nesciunt optio ratione consequatur dolor exercitationem laudantium. Blanditiis id sit voluptates ipsum deserunt hic eum labore natus, adipisci, molestiae quod minus odio beatae doloribus veritatis corrupti, in aspernatur perspiciatis excepturi. Autem voluptatem similique accusamus aliquid quidem neque commodi error quos ipsum voluptate, eos ipsa enim, molestias odio. Sed, dolores. Itaque rem, fuga error dolore nisi quibusdam laudantium. Voluptatem repellat ratione nulla repellendus soluta! A.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita doloremque repellendus cupiditate nobis dolore provident perspiciatis quibusdam magni. Impedit vero id autem deserunt illo saepe nam inventore cum, fuga dicta odit, veniam, explicabo provident quos molestiae voluptatibus! Quas eveniet aspernatur rerum iusto nostrum voluptatum necessitatibus libero delectus mollitia deleniti iste dolor veniam, fuga sed alias. At nobis esse, veniam ab architecto quas quaerat, repellat fugiat sapiente recusandae quidem eaque sit rem libero. Amet consequuntur, sit veniam sequi iure exercitationem. Accusantium.</p>',
// ]);