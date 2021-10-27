<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\LyricsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ToolsController;

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
Route::redirect('/', '/MediaPortal');
Route::get('/MediaPortal', [HomeController::class, 'index'])->name('home');


Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BooksController::class, 'show'])->name('books.show');

Route::get('/drinks', [DrinksController::class, 'index'])->name('drinks.index');
Route::get('/drinks/hotdrinks', [DrinksController::class, 'hotdrinksindex'])->name('hotdrinks.index');
Route::get('/drinks/soda', [DrinksController::class, 'sodaindex'])->name('soda.index');

Route::get('/lyrics', [LyricsController::class, 'index'])->name('lyrics.index');
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/tools', [ToolsController::class, 'index'])->name('tools.index');
