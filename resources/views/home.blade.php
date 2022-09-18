@extends('layouts.main')

@section('main-content')
<div class="container">
    <div id="content">
        <div id="base-card-container">
            <div id="card" v-for="comic in comics" :key="comic.series">
                <img :src="comic.thumb" :alt="comic.series">
                <p></p>
            </div>
        </div>
    </div>
</div>

@endsection