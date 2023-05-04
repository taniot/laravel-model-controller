<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

      $books = Book::all(); //SELECT * FROM `books`
    //   $books = Book::where('id', 2)->get(); //SELECT * FROM `books` WHERE `id` = 1;
    //   $books = Book::where('id', 2)->first(); //SELECT * FROM `books` WHERE `id` = 1;

      return view('welcome', compact('books'));
    }

    public function show($id){

        $book = Book::findOrFail($id); //oggetto BOOK

        return view('product', compact('book'));
    }
}
