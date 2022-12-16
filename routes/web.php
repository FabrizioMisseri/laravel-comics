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
@extends('layouts/app')

@section('content')
@endsection
*/

Route::get('/', function () {

    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];

    return view('home', $data);
})->name('home');

Route::get('/characters', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('characters', $data);
})->name('characters');

Route::get('/comics', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/movies', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('news', $data);
})->name('news');

Route::get('/shop', function () {
    $data = [
        'navbarArray' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ],

        'db' => config('db'),
    ];
    return view('shop', $data);
})->name('shop');
