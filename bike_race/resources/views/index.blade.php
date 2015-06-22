@extends('layout')

@section('main')

<div class="container">
    <div class="user">
        <div class="small_photo_border">
            {{-- <img src="/images/scott_small.jpg">    --}}
            <h2>Scott</h2>
        </div>
    </div>
    <div class="first_title">
        Scottsdale Bike Path
    </div>
    <div id="map">
        {{-- Google Map --}}
    </div>
    <div class="accept">
        <div class="members">
            <i class="fa fa-users"></i>
            <span>7 Racers</span>
        </div>
        <button>
            <i class="fa fa-bicycle"></i>
            <span>Start Race</span>
        </button>
    </div>
</div>

@endsection