<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('auth/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
        Route::get('/admin/blog', [BlogController::class, 'admin_index']);
        Route::get('/admin/add-blog', [BlogController::class, 'admin_create']);
        Route::post('/admin/blog-store', [BlogController::class, 'admin_store'])->name('blog.store');
		Route::get('/admin/blog/{id}/edit', [BlogController::class, 'admin_edit']);
        Route::post('/admin/blog-update', [BlogController::class, 'admin_update'])->name('blog.update');
        Route::get('/admin/blog/{id}/delete', [BlogController::class, 'admin_delete']);
  
});

Route::get('/', [HomeController::class, 'index']);
Route::post('/contact-submit', [HomeController::class, 'store'])->name('contact.submit');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'Blog_details'])->name('blogs.show');
require __DIR__.'/auth.php';
