@extends('layout')

@section('content')
    <h1>Create Item</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <button type="submit">Create</button>
    </form>

@endsection