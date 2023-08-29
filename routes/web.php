<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Moh. Iqbal Waldan",
        "email" => "iqbalwaldan.social@gmail.com",
        "image" => "img/waldan.png",
        "active" => "about"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//    return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load(['category', 'author']),
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author){
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load(['category', 'author']),
//         'active' => 'posts',
//         // 'category' => $author->name,
//    ]);
// });
