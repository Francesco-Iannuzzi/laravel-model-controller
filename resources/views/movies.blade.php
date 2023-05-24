@extends('layouts.app')

@section('content')
    <section id="app_movies">
        <div class="container">
            <h1>Movies</h1>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pt-4">
                    @forelse ($movies as $movie)
                        <div class="col">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <h3 class="card-title py-3">{{ $movie->original_title }}</h3>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li>
                                            <h6>{{ $movie->title }}</h6>
                                        </li>
                                        <li>
                                            <h6>{{ $movie->nationality }}</h6>
                                        </li>
                                        <li>
                                            <h6>{{ $movie->date }}</h6>
                                        </li>
                                        <li>
                                            <h6>{{ $movie->vote }}</h6>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /card body -->
                            </div>
                            <!-- /card -->
                        </div>
                    @empty
                        <h1>Sorry, there is no Movies in Database</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
