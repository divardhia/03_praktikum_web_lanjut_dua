<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
<<<<<<< HEAD

=======
>>>>>>> 37ecc46a2f3bf7f20ffda947ab8c99996504e3a6

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
=======
Route::get('/', function () {
    return view('welcome');
});

>>>>>>> 37ecc46a2f3bf7f20ffda947ab8c99996504e3a6
Route::get('/', [PageController::class, 'home']);
Route::get('/product', [PageController::class, 'product']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
