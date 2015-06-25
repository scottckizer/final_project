@extends('layout')

@section('main')

<div class="container">
    <div class="user">
        <div class="small_photo_border">
            <img src="/images/scott_small.jpg">   
            <h2>Scott</h2>
        </div>
    </div>
    <div class="first_title">
        <form class="user_input" role="form" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="input_dropdown">
                    <h4>Trail Name:</h4>
                    <select name="trail_name">
                        <option value="Choose Trail">Choose Trail</option>
                        {{--@foreach($trails as $trail)
                        <option value="new_race/{{ $trail->trail_name }}">{{ $trail->trail_name }}</option>
                        @endforeach--}}
                        <option value="Arizona Canal Trail">Arizona Canal Trail</option>
                        <option value="Lake Pleasant Parkway">Lake Pleasant Parkway</option>
                        <option value="New River Trail">New River Trail</option>
                        <option value="Scottsdale Bike Path">Scottsdale Bike Path</option>
                        <option value="Skunk Creek Trail">Skunk Creek Trail</option>
                        <option value="WestWing Parkway">WestWing Parkway</option>
                    </select>
                </div>

                <div class="input_one">
                    <h4>Race Name:</h4>
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

                {{-- <button type="submit">
                    <i class="fa fa-bicycle"></i>
                    <span>Create Trail</span>
                </button> --}}
                <button type="submit" class="submit">
                    <i class="fa fa-bicycle"></i>
                    <span>Start Race</span>
                </button>

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
    </div>
</div>

@endsection