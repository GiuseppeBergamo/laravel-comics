@extends('layouts.main')

@section('main-content')
<div class="container">
    <div id="content">
        <div id="base-card-container">
            @foreach ($data as $key => $comic)
            <div id="card">
                <a href="{{ route('comic', ['id' => $key]) }}" class="text-white">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <p>{{ $comic['series'] }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection