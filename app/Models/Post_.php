<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ilham Akmal",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati accusamus, amet voluptates ut natus nulla exercitationem reprehenderit possimus blanditiis! Iusto, blanditiis repellat quo ipsa omnis alias atque sequi perspiciatis, asperiores placeat, nesciunt neque molestias repudiandae. Nulla officia totam perspiciatis corrupti autem soluta consectetur. Laudantium cum quod, modi maxime eligendi sapiente cumque rem dolorem vel nam atque voluptatibus similique asperiores minus aperiam odit dolore dicta corrupti deleniti ut dignissimos a libero veniam. Nobis iste eveniet velit facere a optio, laboriosam consequuntur!"    
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rafi Pramudya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, recusandae fugit accusamus minus quia fuga obcaecati ut ad sapiente dolorum. Dicta delectus esse similique autem? Recusandae ipsum quod aspernatur ipsa provident. Consequuntur distinctio quae nisi vitae quis voluptatibus sit delectus, ipsam itaque unde iure reiciendis voluptatem ea eum totam nemo consectetur quo voluptas ducimus sint harum? Magnam iusto maiores laborum obcaecati ea ut doloremque sit dolore rerum quam consequuntur numquam, temporibus, omnis quos natus voluptates eaque, quasi aspernatur libero possimus amet sint. Laudantium officiis placeat nihil consequatur non, numquam ut? Doloremque, perspiciatis sequi. Ipsum iure similique quidem omnis, aliquid molestias."    
        ]
    ];    

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
