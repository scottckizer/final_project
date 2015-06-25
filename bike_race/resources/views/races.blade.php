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
            <th class="first">Race Name:</th>
            <th class="middle">Date Created:</th>
            <th class="last">Finish By:</th>
            {{-- <th>Distance</th> --}}
            {{-- <th>Time</th> --}}
            {{-- <th>Edit</th> --}}
            {{-- <th>Delete</th> --}}
        </tr>

        @foreach($races as $race)
        <tr>
            <td class="first"><a href="">{{ $race->race_name }}</a></td>
            <td class="middle">{{ $race->open_date }}</td>
            <td class="last">{{ $race->close_date }}</td>
            {{-- <td>13 Miles</td> --}}
            {{-- <td>01:04:36</td> --}}
            <td class="edit"><a href="races/{{ $race->id }}/edit">Edit</a></td>
            <td class="delete"><a href="races/{{ $race->id }}/delete">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection