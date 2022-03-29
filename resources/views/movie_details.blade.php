{{-- Extend app.blade.php --}}
@extends('layouts.app')

{{-- Page Title --}}
@section('page_title')
    Movie Details
@endsection

{{-- Main comics click details --}}
@section('main_content')
    
    <section class="movie-details">
       
        <div class="container-details">
           
            <div class="movie-view-gallery">
                <img src="{{ $movie_to_show['thumb'] }}" alt="">
            </div>
    
            <div class="movie-details-content">
    
                <div class="movie-main-info">
           
                    <div class="movie-title">
                        <h2>{{ $movie_to_show['title'] }}</h2>
                    </div>
             
                    <div class="movie-price">
                  
                        <div class="movie-price-available">
                   
                            <div class="price">
                                <span class="lightgreen">U.S. Price:</span> {{ $movie_to_show['price'] }}
                            </div>
                      
                            <div class="available lightgreen">
                                available
                            </div>
                           
                            <div class="check-availablility">
                                Check Availablility
                            </div>
                        </div>
                    </div>
                  
                    <div class="movie-description">
                        {{ $movie_to_show['description'] }}
                    </div>
                </div>
         
                <div class="movie-advertisement">
                    <span>advertisement</span>
                    <img src="{{ asset('images/adv.jpg') }}" alt="Advertisement image">
                </div>
            </div>
        </div>
    </section>


    <section class="movie-detailed-information">
       
        <div class="container-details">
           
            <div class="movie-information-content">
   
                <div class="movie-talent">
                    <h3>Talent</h3>
               
                    <div class="talent-info">
                       
                        <div class="art-by">
                            <div>Art by:</div>
                            <span>
                                @foreach($movie_to_show['artists'] as $artist)
                                    {{ $artist }}
                                    @if (!$loop->last) 
                                        ,
                                    @endif
                                @endforeach
                            </span>
                        </div>
                 
                        <div class="written-by">
                            <div>Written by:</div>
                            <span>
                                @foreach($movie_to_show['writers'] as $writer)
                                    {{ $writer }}
                                    @if (!$loop->last) 
                                        ,
                                    @endif
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
         
                <div class="movie-specs">
                    <h3>Specs</h3>
                   
                    <div class="specs-info">
                      
                        <div class="specs-series">
                            <div>Series:</div> <span>{{ $movie_to_show['series'] }}</span>
                        </div>
                   
                        <div class="specs-price">
                            <div>U.S. Price:</div> <span>{{ $movie_to_show['price'] }}</span>
                        </div>
                      
                        <div class="specs-sale-date">
                            <div>On sale date:</div> <span>{{ $movie_to_show['sale_date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection