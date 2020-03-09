<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $genres = Genre::all();

        return view('some-folder-name.folder-file', [
            'genres' =>$genres,
            'books' => $books
        ]);
    }

    public function saveBook(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre_id = $request->genre;
        $book->date_written = $request->date;
        $book->publisher = $request->publisher;
        $book->info = $request->bookInfo;

        $book->save();

        return response()->json([], 201);
    }
}
