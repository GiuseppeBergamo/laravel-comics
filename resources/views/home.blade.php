@extends('layouts.main')

@section('main-content')
<div class="container">
    <div id="content">
        <div id="base-card-container">
            @foreach ($data as $comic)
            <div id="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <p>{{ $comic['series'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection