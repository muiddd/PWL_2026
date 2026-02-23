<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world ', function () {
    return 'world';
});

Route::get('/', function () {
    return 'selamat datang';
});

Route::get('/about', function () {
    return '244107020006 Abdul Muid';
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});
