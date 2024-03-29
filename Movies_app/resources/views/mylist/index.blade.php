@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold"> My List Movies/Tv shows </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8" id="my-list-container">

                @foreach ($movieDetails as $movie)
                    <x-my_list_movie-card :movie="$movie" :genres="$genres" />
                @endforeach

            </div>

        </div>
    @endsection
