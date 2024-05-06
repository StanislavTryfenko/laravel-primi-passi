<?php

use Illuminate\Support\Facades\Route;

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

    $data = [
        'title' => 'Hello Laravel',
        'links' => ['Home', 'About', 'Contact']
    ];
    
    return view('home', $data);
});

Route::get('/Home', function () {
    return view('home' , ['title' => 'Hello Laravel', 'links' => ['Home', 'About', 'Contact']]);
});

Route::get('/About', function () {
    return view('about' , ['title' => 'About page', 'links' => ['Home', 'About', 'Contact']]);
});

Route::get('/Contact', function () {
    return view('contact' , ['title' => 'Contact page', 'links' => ['Home', 'About', 'Contact']]);
});

