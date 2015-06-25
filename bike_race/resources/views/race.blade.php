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
        <table class="race_data">
            <tr>
                <th class="data_field_1">Race Name: {{ $race->race_name }}</th>
                <th class="data_field_2">Date Created: {{ $race->open_date }}</th>
                <th class="data_field_3">Finish By: {{ $race->close_date }}</th>
                {{-- <th>Distance</th> --}}
                {{-- <th>Time</th> --}}
                {{-- <th>Edit</th> --}}
                {{-- <th>Delete</th> --}}
            </tr>
        </table>
        {{-- <span>{{ $race->race_name }} {{ $race->open_date }} {{ $race->close_date }}</span> --}}
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