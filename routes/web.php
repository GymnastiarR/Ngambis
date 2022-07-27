<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UjianController;

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

// Route::get('/new-soal', function () {
//     return view('new-survei');
// });

Route::post('soal', [QuestionController::class, 'store']);
Route::resource('soal', QuestionController::class);

Route::get('/latihan', function () {
    return view('latihan');
});

// Route::get('/ujian/{category}/{time}', function ($category, $time) {
//     return $time;
// });

Route::get('/ujian/{category}/{time}', [UjianController::class, 'index']);

Route::post('upload', [ImageController::class, 'store'])->name('images.upload');


require __DIR__.'/auth.php';