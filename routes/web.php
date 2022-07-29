<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UjianController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home2');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/new-soal', function () {
//     return view('new-survei');
// });

Route::post('soal', [QuestionController::class, 'store'])->middleware(['verified']);
Route::get('soal/{question}/edit', [QuestionController::class, 'edit'])->middleware(['verified']);
Route::put('soal/{question}', [QuestionController::class, 'update'])->middleware(['verified']);
Route::delete('soal/{question}', [QuestionController::class, 'destroy'])->middleware(['verified']);
Route::get('soal', [QuestionController::class, 'index'])->name('soal')->middleware(['verified']);
Route::get('soal/create', [QuestionController::class, 'create'])->middleware(['verified']);
Route::post('upload', [ImageController::class, 'store'])->name('images.upload');

Route::get('tukar-point', function(){
    return view('tukar');
})->middleware(['verified']);

Route::get('/latihan', function () {
    return view('latihan');
})->name('latihan')->middleware(['auth']);

Route::get('/ujian/{category}/{time}', [UjianController::class, 'index'])->middleware(['auth']);

Route::get('/histories', [HistoryController::class, 'index'])->name('history')->middleware(['auth']);

Route::post('ujian/nilai', [UjianController::class, 'grade'])->name('ujian.nilai')->middleware(['auth']);


require __DIR__.'/auth.php';