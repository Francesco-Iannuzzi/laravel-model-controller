@extends('layouts.app')

@section('content')
    <h2>MOVIE</h2>
    <ul>
        @forelse ($movies as $movie)
            <li>{{ $movie->title }}</li>
        @empty
            <h1>Niente</h1>
        @endforelse
    </ul>
@endsection
