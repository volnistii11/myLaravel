<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/about', [MainController::class,'about'])->name('about');

//указываем название url адреса "->name('review')", чтобы потом сделать на него редирект (файл ReviewController 29строка)
Route::get('/review', [ReviewController::class,'review'])->name('review');
Route::post('/review/check', [ReviewController::class,'review_check']);

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: ' . $id . '.name: ' . $name;
//});

Route::get('/news',[NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/create', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}',[NewsController::class, 'show'])->name('news.show');


//Route::get('/news/showFormForCreate', [NewsController::class, 'showFormForCreate'])->name('news.showFormForCreate');
//Route::post('/news/create', [NewsController::class, 'create'])->name('news.create');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}',[CategoryController::class, 'show'])->name('categories.show');

require __DIR__.'/auth.php';
