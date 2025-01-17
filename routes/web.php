<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tugas-2', [App\Http\Controllers\Tugas2Controller::class, 'tugas2']);

use App\Http\Controllers\DebugDemoController;

Route::get('/debug', [DebugDemoController::class, 'create'])->name('debug.create');
Route::post('/debug', [DebugDemoController::class, 'store'])->name('debug.store');


use App\Http\Controllers\LibraryDemoController;

Route::get('/library-demo', [LibraryDemoController::class, 'index'])->name('library.demo');
Route::get('/export-pdf', [LibraryDemoController::class, 'exportPDF'])->name('export.pdf');


use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);
Route::get('books-report', [BookController::class, 'generatePDF'])->name('books.report');
