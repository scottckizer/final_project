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
        <form class="user_input" role="form" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="input_one">
                    <h4>Race Name</h4>
                    <input type="text" name="race_name" placeholder="Race Name">
                </div>

                <div class="input_two">
                    <h4>Date Created:</h4>
                    <input type="date" name="open_date">
                </div>

                <div class="input_three">
                    <h4>Finish By:</h4>
                    <input type="date" name="close_date">
                </div>

                <button type="Submit">Submit</button>
        </form>
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