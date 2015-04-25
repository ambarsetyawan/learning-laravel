@extends('app')

@section('content')

<h1>About</h1>

@if (count($friends))
<h3>People I like:</h3>
<ul>
    @foreach($friends as $friend)
        <li>{{ $friend }}</li>
    @endforeach
</ul>
@endif

<p>lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>

@stop

