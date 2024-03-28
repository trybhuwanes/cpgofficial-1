<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\CeritaUmkmController;
use App\Http\Controllers\OrganizingController;
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

Route::get('/about', function () {
    return view('aboutPage');
});

Route::get('/program', function () {
    return view('programPage');
});

Route::get('/schedule', function () {
    return view('schedulePage');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/cerita-umkm', [CeritaUmkmController::class, 'index']);
Route::get('/assesment-center', [AssesmentController::class, 'index']);
Route::get('/organizing', [OrganizingController::class, 'index']);