<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;
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

Route::get('/key', function () {
    $response = Http::get('http://localhost:3000/key');
    return $response;
});

// Route::resource('/api/v1/products', 'ProductController');
Route::resource('/', UserController::class);
