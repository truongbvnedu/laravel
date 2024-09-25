@extends('layout')
@section('content')
<h1>Edit Item</h1>

<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $item->name }}" required>
    <button type="submit">Update</button>
</form>

@endsection