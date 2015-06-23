@extends('layout')

@section('main')

<!-- Hero Section -->
    <section class="hero">
        {{-- <img src="http://placehold.it/1280x300" alt=""> --}}
        <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/16687438&amp;auto_play=false&amp;visual=true"></iframe>
    </section>

    <h1>Edit Race</h1>

    <form action="{{ $race->id }}/edit" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
            {{-- <div>
                <label for="user_id">Artist</label>
                <input name="user_id" type="text" placeholder="1 = Deadmau5, 2 = Kendrick Lamar" value="{{ $track->user_id }}">
            </div> --}}

            <div>
                <label for="race_name">Race Name</label>
                <input name="race_name" type="text" placeholder="Race Name" value="{{ $race->race_name }}">
            </div>

            <div>
                <label for="open_date">Date Created</label>
                <input name="open_date" type="datetime" value="{{ $race->open_date }}">
            </div>

            <div>
                <label for="close_date">Finish By</label>
                <input name="close_date" type="datetime" value="{{ $race->close_date }}">
            </div>

            <div>
                <button type="submit">Update Race</button>
            </div>
        </fieldset>
    </form>

@endsection