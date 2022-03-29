{{-- Extend base.blade.php --}}
@extends('layouts.base')

{{-- Page Title --}}
@section('page_title')
    Homepage
@endsection

@section('main_classes')
    secondary-color-background
@endsection

@section('main_content')

    {{-- Movies --}}
    <section class="movies">
       
        <div class="container">
            
            <div class="current-series">
                <h3>CURRENT SERIES</h3>
            </div>

            @include('components.movies_list', $data = [
                'movies_array' => $movie_array
            ])

            <div class="load-more">
                <a href="#">LOAD MORE</a>
            </div>

        </div>
    </section>

    @include('partials.pre_footer')

@endsection