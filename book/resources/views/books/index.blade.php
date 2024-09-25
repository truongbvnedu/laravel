@extends('layout')

@section('content')
<h1>Books List</h1>
<a href="{{ route('books.create') }}">Create Item</a>

<table border="1" style="width:100%; text-align:left;">
    <thead>
        <tr>
            <th>BookId</th>
            <th>Title</th>
            <th>Price</th>
            <th>Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td> 
            <td>{{ $book->title }}</td> 
            <td>{{ $book->price }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" style="color:blue;">Update</a> | 
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color:blue; background:none; border:none; cursor:pointer;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
