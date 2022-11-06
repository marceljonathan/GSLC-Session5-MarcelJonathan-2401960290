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

Route::get('/editBooks', [BooksController::class, 'addBooks'])->name('add_books_view');

Route::post('/editBooks/post', [BooksController::class, 'addBooksLogic'])->name('add_books_logic');

Route::delete('/editBooks/delete/{id}', [BooksController::class, 'deleteLogic'])->name('delete_books_logic');

Route::get('/editBooks/update/{id}', [BooksController::class, 'updateBooks'])->name('update_books_view');

Route::patch('/editBooks/update/{id}', [BooksController::class, 'updateBooksLogic'])->name('update_books_logic');
