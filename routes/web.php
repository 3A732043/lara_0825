<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;

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
    //return view('index');
    /*
    $post = new Post();
    $post->title = 'test title';
    $post->content = 'test content';
    $post->save();

    Post::create([
        'title' => 'test title 2',
        'content' => 'test content 2',
    ]);

    $posts=Post::all();
    dd($posts);

    $post = Post::find(5);
    dd($post);

    $post = Post::where('id', '<', 11)->orderBy('id', 'DESC')->get();
    dd($post);

    $post = Post::find(5);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);

    $post = Post::find(5);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();

    $post = Post::find(2);
    $post->delete();

    Post::destroy(8);

    Post::destroy(3, 5, 7);

    $allPosts = Post::all();
    dd($allPosts);

    $savedPosts = Post::where('title', 'saved title')->get();
    dd($savedPosts);
    */
    $ninthPost = Post::find(9);
    dd($ninthPost);

});

Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('post', [PostsController::class, 'post'])->name('posts.post');
Route::get('contact', [PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostsController::class, 'about'])->name('posts.about');
