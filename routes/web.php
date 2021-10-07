<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home' , [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Ilham Akmal Rafi Pramudya",
        "email" => "ilhamaakmalrp@gmail.com",
        "image" => "pfp.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];

    return view('posts' , [
        "tittle" => "Blog",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    
    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});