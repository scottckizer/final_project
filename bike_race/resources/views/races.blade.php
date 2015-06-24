@extends('layout')

@section('main')
<div class="hero">
    <div class="user_info">
        <div class="large_photo_border">
            <img src="/images/scott.jpg">
        </div>
        <h1>Scott Kizer</h1>
        <h3><i class="fa fa-trophy"></i>Races Won: 12</h3>
    </div>
</div>

<div class="primary_section">
    <table class="races">
        <tr>
            <th>Race Name</th>
            <th>Date Created</th>
            <th>Finish By</th>
            {{-- <th>Distance</th> --}}
            {{-- <th>Time</th> --}}
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach($races as $race)
        <tr>
            <td>{{ $race->race_name }}</td>
            <td>{{ $race->open_date }}</td>
            <td>{{ $race->close_date }}</td>
            {{-- <td>13 Miles</td> --}}
            {{-- <td>01:04:36</td> --}}
            <td><a href="races/{{ $race->id }}/edit">Edit</a></td>
            <td><a href="races/{{ $race->id }}/delete">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>


{{-- <div class="primary_section">
    @foreach($races as $race)
    <div class="odd">
        <i class="fa fa-flag-checkered"></i>
        <a href="{{ $race->race_name }}">{{ $race->race_name }}</a>
        <span>Distance</span>
        <span>Time</span>
        <div>
            <a href="{{ $race->id }}/edit">Edit</a>
            <a href="/races/{{ $race->id }}/delete">Delete</a>
        </div>
    </div>
    @endforeach
    <div class="even">
        <i class="fa fa-flag-checkered"></i>
        <span>Race Name</span>
        <span>Distance</span>
        <span>Time</span>
    </div>
    <div class="odd">
        <i class="fa fa-flag-checkered"></i>
        <span>Race Name</span>
        <span>Distance</span>
        <span>Time</span>
    </div>
    <div class="even">
        <i class="fa fa-flag-checkered"></i>
        <span>Race Name</span>
        <span>Distance</span>
        <span>Time</span>
    </div>
    <div class="odd">
        <i class="fa fa-flag-checkered"></i>
        <span>Race Name</span>
        <span>Distance</span>
        <span>Time</span>
    </div>
    <div class="even">
        <i class="fa fa-flag-checkered"></i>
        <span>Race Name</span>
        <span>Distance</span>
        <span>Time</span>
    </div>
</div> --}}

@endsection