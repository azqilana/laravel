<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class post
{
    private static  $post=[
        [

        'judul'=>'Lorem Satu',
        'slug'=>'lorem-satu',
        'penulis'=>'azqilana',
        'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quaerat veritatis fugit odit. Consequuntur perspiciatis non nam dignissimos ex deserunt, repudiandae unde! Autem ipsum sed totam recusandae delectus ratione nulla tenetur consequatur libero quod iure natus, unde, facere pariatur laboriosam dolore placeat ab! Corporis ipsa recusandae adipisci rerum excepturi, inventore, illo, illum ab modi suscipit sunt! Distinctio vitae voluptates ratione non commodi, quos libero perferendis dolorem expedita maiores cupiditate esse explicabo natus hic, accusamus pariatur dicta in corrupti? Hic, eveniet? Voluptas odio voluptatibus corporis dicta laborum, consequuntur facilis dolorum facere sed? Perspiciatis ratione repudiandae, quae porro doloribus dignissimos nulla itaque provident explicabo, beatae, voluptate laudantium. Eius molestiae odio, illum est, similique corrupti beatae natus in voluptates consectetur quibusdam esse praesentium reiciendis, harum nihil nesciunt asperiores eos sapiente! Quo hic cum nostrum quae, quas enim. Quod delectus nihil minima, culpa, officiis dolorum fugit quaerat reprehenderit modi fugiat distinctio totam ullam, qui blanditiis ex. Quidem quasi natus laboriosam ratione dolorum veritatis libero suscipit error ipsa accusamus? Provident consequuntur atque quaerat doloremque adipisci neque qui itaque, ea veniam numquam perferendis aliquid ducimus eius tenetur libero temporibus explicabo dicta quidem excepturi quasi enim animi consectetur dolorum! Asperiores at blanditiis explicabo! Accusamus odit esse velit!'
    ],
    [

        'judul'=>'Lorem Dua',
        'slug'=>'lorem-dua',
        'penulis'=>'Qasytholani',
        'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quaerat veritatis fugit odit. Consequuntur perspiciatis non nam dignissimos ex deserunt, repudiandae unde! Autem ipsum sed totam recusandae delectus ratione nulla tenetur consequatur libero quod iure natus, unde, facere pariatur laboriosam dolore placeat ab! Corporis ipsa recusandae adipisci rerum excepturi, inventore, illo, illum ab modi suscipit sunt! Distinctio vitae voluptates ratione non commodi, quos libero perferendis dolorem expedita maiores cupiditate esse explicabo natus hic, accusamus pariatur dicta in corrupti? Hic, eveniet? Voluptas odio voluptatibus corporis dicta laborum, consequuntur facilis dolorum facere sed? Perspiciatis ratione repudiandae, quae porro doloribus dignissimos nulla itaque provident explicabo, beatae, voluptate laudantium. Eius molestiae odio, illum est, similique corrupti beatae natus in voluptates consectetur quibusdam esse praesentium reiciendis, harum nihil nesciunt asperiores eos sapiente! Quo hic cum nostrum quae, quas enim. Quod delectus nihil minima, culpa, officiis dolorum fugit quaerat reprehenderit modi fugiat distinctio totam ullam, qui blanditiis ex. Quidem quasi natus laboriosam ratione dolorum veritatis libero suscipit error ipsa accusamus? Provident consequuntur atque quaerat doloremque adipisci neque qui itaque, ea veniam numquam perferendis aliquid ducimus eius tenetur libero temporibus explicabo dicta quidem excepturi quasi enim animi consectetur dolorum! Asperiores at blanditiis explicabo! Accusamus odit esse velit!'
    ],

];
    public static function all()
    {
        return collect(self::$post);
    }
    public static function find($slug)
    {
        $posts=static::all();
    
        // foreach ($posts as $p) {
        //     if ($p['slug']== $slug) {
        //         $post= $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
