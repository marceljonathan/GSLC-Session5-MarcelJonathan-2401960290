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
        return view('addBooks');
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

        return redirect()->route('view_books');

    }

}
