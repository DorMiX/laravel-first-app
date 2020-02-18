<?php

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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/test', function () {
//     return view('test', [
//         'name' => request('name')
//     ]);
// });

// Route::get('/posts/{post}', function ($post)
// {
//     $posts = [
//         '1st' => 'First',
//         '2nd' => 'Second'
//     ];
//
//     if (! array_key_exists($post, $posts)) {
//         // code...
//         abort(404, 'Not found!');
//     }
//
//     return view('post', [
//         'post' => $posts[$post]
//         // 'post' => $post
//     ]);
// });

Route::get('/posts/{post}', 'PostController@show');
