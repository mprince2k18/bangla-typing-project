<?php

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
})->name('frontend');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/typing', [App\Http\Controllers\HomeController::class, 'typing'])->name('typing');
Route::get('/create/paragraph', [App\Http\Controllers\HomeController::class, 'create_paragraph'])->name('create.paragraph');
Route::post('/store/paragraph', [App\Http\Controllers\HomeController::class, 'store'])->name('store.paragraph');
Route::post('/examResult/{chapter}', [App\Http\Controllers\HomeController::class, 'examResult'])->name('examResult');
Route::get('/chapters', [App\Http\Controllers\HomeController::class, 'chapters'])->name('chapters');
Route::get('/exam/{chapter}', [App\Http\Controllers\HomeController::class, 'exam'])->name('exam');

Route::get('/report', [App\Http\Controllers\HomeController::class, 'report'])->name('report');
Route::get('/report/details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('details');

Route::get('/ranking/{chapter_id}', [App\Http\Controllers\HomeController::class, 'ranking_chapter_based'])->name('ranking.chapter.based');
