{{-- componente aggiunto - lista film --}}

{{-- Extend app.blade.php --}}
@extends('layouts.base')

{{-- Page Title --}}
@section('page_title')
    Movie Details
@endsection

{{-- Main comics click details --}}
@section('main_content')
<div class="movies">
    <div class="movies-list">
        @foreach ($movie_array as $movie)
                <div class="movie">
    
                    <a href="{{ route('movie-details', ['title' => $movie['title']]) }}">
                        <div>
                            <img src="{{ $movie['thumb'] }}" alt="{{$movie['title']}}">
                            <h5>{{ $movie['series'] }}</h5>
                        </div>
                    </a>

                    {{-- @php
                    var_dump($movie)
                    @endphp --}}
                    
                </div>
            @endforeach
    </div>
</div>

@endsection