<?php

namespace App\Http\Controllers;

use App\Models\bookList;
use Illuminate\Http\Request;


class bookController extends Controller
{
    public function index(){
        $books = bookList::all();
        return view('books.index' , compact('books'));
    }
    public function create(){
        return view('books.create');
    }

    public function store(Request $rq){
        $book = new bookList();
        $book->title = $rq->input('title');
        $book->price = $rq->input('price');
        $book->save();
        return redirect()->route('books.index');
    }
    public function edit(bookList $book){
        return view('books.edit', compact('book'));
    }
    public function update(Request $rq, bookList $book){
        $book->title = $rq->title;
        $book->price = $rq->price;
        $book->save();
        return redirect()->route('books.index');
    } 
    public function destroy(bookList $book){
        $book->delete();
        return redirect()->route('books.index');
    }
    public function show(bookList $book)
{
    return view('books.show', compact('books'));
}
}
