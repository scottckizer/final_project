@extends('layout')

@section('main')

<div class="container">
    <div class="user">
        <div class="small_photo_border">
            <h2>Username</h2>
        </div>
    </div>
    <div class="first_title">
        Trail Name
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
            <span>Accept</span>
        </button>
    </div>
</div>

@endsection