{{-- La pagina in questione estende il layout 'main' --}}
@extends('layouts.main')

{{-- La home avrà questo contenuto specifico  --}}
@section('contenuto-home')
    <div class="container">
        <h1>I miei film su laravel</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><strong>{{ $movie['title'] }}</strong></h4>
                            <h5 class="card-text"><i>{{ $movie['original_title'] }}</i></h5>
                            <p class="card-text">{{ $movie['nationality'] }}</p>
                            <p class="card-text">{{ $movie['date'] }}</p>
                            <p class="card-text">Stars: {{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
