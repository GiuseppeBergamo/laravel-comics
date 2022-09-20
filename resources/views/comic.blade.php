@extends('layouts.main')

@section('main-content')

<section id="comic-details">
    <div class="detail">
        <h1>{{ $comic['title'] }}</h1>
        <div id="price-bar">
            <div class="price">
                <p>US Price: {{ $comic['price'] }}</p>
                <p>AVAILABLE</p>
            </div>
            <div class="check-availability">
                <p>Check Availability</p>
            </div>
        </div>
        <p>{{ $comic['description'] }}</p>

    </div>
    <div class="adv">
        <h4>ADVERTISEMENT</h4>
        <img src="{{ asset('images/adv.jpg') }}" alt="adv">
    </div>
</section>
<section id="comic-specs">
    <div id="talent">
        <h3 class="border-bottom-grey title-specs">Talent</h3>
        <div class="border-bottom-grey comic-info">
            <div class="info">
                <p>Art by:</p>
            </div>
            <div class="content-info">
                @foreach ($comic['artists'] as $artist)
                    <span>{{ $artist }}</span>
                @endforeach
            </div>
        </div>

        <div class="border-bottom-grey comic-info">
            <div class="info">
                <p>Written by:</p>
            </div>
            <div class="content-info">
                @foreach ($comic['writers'] as $writer)
                    <span>{{ $writer }}</span>
                @endforeach
            </div>
        </div>
        
    </div>

    <div id="specs">
        <h3 class="border-bottom-grey title-specs">Specs</h3>
        <div class="border-bottom-grey comic-info">
            <div class="info">
                <p>Series:</p>
            </div>
            <div class="content-info">
                <p>{{ $comic['series'] }}</p>
            </div>
        </div>

        <div class="border-bottom-grey comic-info">
            <div class="info">
                <p>US Price:</p>
            </div>
            <div class="content-info">
                <p>{{ $comic['price'] }}</p>
            </div>
        </div>

        <div class="border-bottom-grey comic-info">
            <div class="info">
                <p>On Sale Date:</p>
            </div>
            <div class="content-info">
                <p>{{ $comic['sale_date'] }}</p>
            </div>
        </div>

    </div>
</section>

@endsection