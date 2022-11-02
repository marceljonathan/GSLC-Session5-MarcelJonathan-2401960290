<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BooksController::class, 'index'])->name('view_books');

Route::get('/addBooks', [BooksController::class, 'addBooks'])->name('add_books_view');

Route::post('/addBooks/post', [BooksController::class, 'addBooksLogic'])->name('add_books_logic');
