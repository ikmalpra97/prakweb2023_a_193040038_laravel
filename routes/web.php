<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use App\Models\Post;
// use App\Models\User;
=======


>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======


>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======


>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Zahra Dwi Ameilia",
        "email" => "zahradwiameilia1@gmail.com",
        "image" => "zahra.jpg"
    ]);
});
Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419

Route::get('/', function () {
    return view('home' , [
        "tittle" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        'active' => 'about',
        "name" => "Ilham Akmal Rafi Pramudya",
        "email" => "ilhamaakmalrp@gmail.com",
        "image" => "pfp.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);


// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'tittle' => 'Post Categories',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('author', 'category')
//     ]);
// });
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
