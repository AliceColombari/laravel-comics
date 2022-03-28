{{-- componente aggiunto - lista film --}}

<div class="movies-list">
    @foreach ($movie_array as $movie)
            <div class="movie">
                <div>
                    <img src="{{ $movie['thumb'] }}">
                    <h5>{{ $movie['series'] }}</h5>
                </div>
            </div>
        @endforeach
</div>