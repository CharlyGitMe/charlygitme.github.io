<?php

use App\Http\Controllers\PortfolioController;
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

Route::get('/', [PortfolioController::class, 'index']);


Route::get('/flex', function () {
  return view('flex');
});

Route::get('/moon', function () {
  return view('moon');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/stacked', function () {
  return view('stacked');
});


Route::get('/post', function () {
  return view('post');
});

Route::get('/mood', function () {
  return view('mood');
});


