@extends('layout')

@section('content')
<h1>Edit Book</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST"> 
    @csrf
    @method('PATCH') 
    
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $book->title }}" required> <br>
    
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="{{ $book->price }}" required> <br>
    
    <button type="submit">Update</button>
</form>

@endsection