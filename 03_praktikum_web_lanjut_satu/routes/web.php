<?php

use App\Http\Controllers\StoreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['name' => 'Anisa Rahmasari :)']);
});

// Route::prefix('/category')->group(function(){
//     Route::get('/rinso',[StoreController::class,'rinso']);
// });

Route::prefix('/category')->group(function(){
    Route::get('/rinso', [StoreController::class, 'rinso']);
    Route::get('/lifebuoy',[StoreController::class,'lifebuoy']);
    Route::get('/sunlight',[StoreController::class,'sunlight']);
});

Route::get('/news/{promo}',[StoreController::class,'promo']);

Route::prefix('/program')->group(function(){
    Route::get('/gajiKaryawan',[StoreController::class,'gajiKaryawan']);
    Route::get('/restok',[StoreController::class,'restok']);
    Route::get('/bayarKontrak',[StoreController::class,'bayarKontrak']);
});

Route::get('/about-us', function () {
    return view('about-us', ['message' => 'Kami adalah toko online dengan banyak promo :)']);
});

Route::resource('/contact-us','MyStoreController',['only' => ['index']]);

