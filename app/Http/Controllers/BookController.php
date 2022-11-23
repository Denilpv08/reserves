<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $book = Book::all();
        $cantidad = Book::count();
        return view('books.index', compact('book', 'cantidad'));
    }

    public function create()
    {
        $book = Book::all();
        return view('books.create', compact('book'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->post('title');
        $book->author = $request->post('author');
        $book->description = $request->post('description');
        $book->created_at = $request->post('created_at');
        $book->save();
        return redirect()->route('books.index')->with('success', 'successfully added');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.delete', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->post('title');
        $book->author = $request->post('author');
        $book->description = $request->post('description');
        $book->created_at = $request->post('created_at');
        $book->update();
        return redirect()->route('books.index')->with('success', 'successfully updated');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'successfully deleted');
    }
}
