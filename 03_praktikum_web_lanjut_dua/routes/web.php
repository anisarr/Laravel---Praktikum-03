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
    return view('index');
});

Route::get('/promotion', function(){
    return view('promotion');
});


Route::get('/contact', function(){
    return view('contact');
});

Route::get('/products', function(){
    return view('products');
});


// Route::get('idx', function () {
//     return view('index');
// });

// Route::get('pro', function () {
//     return view('products');
// });
