@extends('layouts.app')

@section('content')
    <section id="app_home">
        <div class="container">
            <h1>Home</h1>
            <div class="row pt-5">
                <div class="col text-center">
                    <h3>Select Movies</h3>
                    <button class="btn btn-lg" type="button"><a href="{{ route('movies') }}">Movies</a></button>
                </div>
                <div class="col text-center">
                    <h3>Select Series</h3>
                    <button class="btn btn-lg" type="button"><a href="#">Series</a></button>
                </div>
            </div>
        </div>
    </section>
@endsection
