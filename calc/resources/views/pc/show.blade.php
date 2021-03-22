@extends('layout.main')

@section( 'content')
<h1>Calculator</h1>

<form action="{{route('domath')}}" method="post">

    X: <input type="text" name="x">
    Y: <input type="text" name="y">

    <button type="submit">Do Math</button>
    @csrf
    <h1>Calculator says - {{$r}}</h1>
</form>

@endsection
