<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'min:3|unique:books,title', 
            'author' => 'string|max:60',
            'publication_year' => 'integer|min:4|max:4',
            'available_copies' => 'integer|min:1',
        ]);
        // Create book object
        $book = new Book();
        
        $book->title = $request->title;
        $book->author = $request->author ;
        $book->publication_year = $request->publication_year ;
        $book->available_copies = $request->available_copies ;

        // Save the instance to the database
        $book->save();

        // Redirect back with a success message
          return redirect()->back()->with('success', 'Book created successfully!');
    }
  public function index(){
     // Fetch all Books from the database
    $books = Book::all();

    // Pass the categories to the view
    return view('books.index', compact('books'));
  } 

  public function home(){
    return view('home');
  }
  public function create(){
    return view('books.create');
  }  
}
