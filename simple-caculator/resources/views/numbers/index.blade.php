@extends('layout')

@section('content')
<h1>Simple Calculator</h1>
<form action="{{ route('calculate') }}" method="GET">
    A: <input type="number" name="a" value="{{ isset($a) ? $a : '' }}"> <br>
    B: <input type="number" name="b" value="{{ isset($b) ? $b : '' }}"> <br>
    <input type="submit" value="Calculate">
</form>

@if(isset($total))
    <h2>Result: {{ $a }} + {{ $b }} = {{ $total }}</h2>
@endif
@endsection
