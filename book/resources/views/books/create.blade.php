@extends('layout')

@section('content')
    <h1>Create Item</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required> <br>
         <label for="price">price:</label>
        <input type="number" id="price" name="price" required><br>
        
        <button type="submit">Create</button>
    </form>

@endsection