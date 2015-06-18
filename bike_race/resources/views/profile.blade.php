@extends('layout')

@section('main')
<div class="hero">
    <div class="user_info">
        <div class="large_photo_border"></div>
        <h1>Scott Kizer</h1>
        <h3><i class="fa fa-trophy"></i>Races Won: 12</h3>
    </div>
</div>
<div class="bars">
    <a href="">
        <div class="odd">
            <i class="fa fa-bicycle"></i>
            <span>New Race</span>
        </div>
    </a>
    <a href="">
        <div class="even">
            <i class="fa fa-flag-checkered"></i>
            <span>My Challenges</span>
        </div>
    </a>
    <a href="">
        <div class="odd">
            <i class="fa fa-comments"></i>
            <span>Comments</span>
        </div>
    </a>
    <a href="">
        <div class="even">
            <i class="fa fa-bar-chart"></i>
            <span>My Stats</span>
        </div>
    </a>
    <a href="">
        <div class="odd">
            <i class="fa fa-users"></i>
            <span>My Friends</span>
        </div>
    </a>
    <a href="">
        <div class="even">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
        </div>
    </a>
</div>
@endsection