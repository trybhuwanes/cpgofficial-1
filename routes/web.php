<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\CeritaUmkmController;
use App\Http\Controllers\OrganizingController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
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

$this->urlAdmin = "admin";

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
Route::get('/blog-read', [BlogController::class, 'read'])->name('blog-read');
Route::get('/cerita-umkm', [CeritaUmkmController::class, 'index']);
Route::get('/cerita-umkm-read', [CeritaUmkmController::class, 'read'])->name('cerita-umkm-read');
Route::get('/assesment-center', [AssesmentController::class, 'index']);
Route::get('/organizing', [OrganizingController::class, 'index']);
Route::get('/internship', [InternshipController::class, 'index']);
Route::get('/contact', [ContactUsController::class, 'index']);

Route::prefix($this->urlAdmin)->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('blog')->group(function(){
        Route::get('/', [BlogController::class, 'adminBlog'])->name('admin.blog');
        Route::get('/create', [BlogController::class, 'createBlog'])->name('admin.blog.create');
    });
});
