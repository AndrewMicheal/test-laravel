<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function index() 
    {
        // select * from cats
        $books = Book::paginate(2);
        
        return view('books/index',[
            'books' => $books
        ]);
    }

    public function show($id) 
    {
        // select * from cats where id = $id
        $book = Book::findOrFail($id);
        return view('books/show',[
            'book'=>$book
        ]);
    }
}
