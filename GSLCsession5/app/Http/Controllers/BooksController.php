<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(){
        $books = DB::table('books')->get();

        return view('home', compact('books'));
    }

    public function addBooks(){
        $books = DB::table('books')->get();

        return view('editBooks', compact('books'));
    }

    public function addBooksLogic(Request $request){
        $request->validate([
            'content_url' => 'required',
            'content_type' => 'required',
            'title' => 'required|min:1|max:500',
            'author' => 'required|min:3|max:500',
            'description' => 'required|min:1|max:1000000',
            'ISBN' => 'required',
            'price' => 'required'
        ]);

        DB::table('books')->insert([
            'content_url' => $request->content_url,
            'content_type' => $request->content_type,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'ISBN' => $request->ISBN,
            'price' => $request->price
        ]);

        return redirect()->route('add_books_view');

    }

    public function deleteLogic(Request $request){
        DB::table('books')->where('id', '=', $request->id)->delete();

        return redirect()->route('add_books_view');
    }

    public function updateBooks(Request $request){
        $books = DB::table('books')->where('id', '=', $request->id)->first();

        return view('updateBooks', compact('books'));
    }

    public function updateBooksLogic(Request $request){
        $request->validate([
            'content_url' => 'required',
            'content_type' => 'required',
            'title' => 'required|min:1|max:500',
            'author' => 'required|min:3|max:500',
            'description' => 'required|min:1|max:1000000',
            'ISBN' => 'required',
            'price' => 'required'
        ]);

        DB::table('books')->where('id', '=', $request->id)->update([
            'content_url' => $request->content_url,
            'content_type' => $request->content_type,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'ISBN' => $request->ISBN,
            'price' => $request->price
        ]);

        return redirect()->route('add_books_view');
    }

}
