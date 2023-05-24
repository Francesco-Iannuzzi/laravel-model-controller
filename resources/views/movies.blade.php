@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-3 pt-4">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <h3 class="card-title">{{ $movie->original_title }}</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <h6>{{ $movie->title }}</h6>
                                    </li>
                                    <li>
                                        <h6>{{ $movie->original_nationality }}</h6>
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
                @endforelse
            </div>
        </div>
    </div>
@endsection
