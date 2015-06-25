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
            @foreach($race as $race)
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
<script type="text/javascript">

    var map;
    var origin = {
        lat: 33.663201,
        lng: -112.2318391
    }

    $(function() {
        map = new GMaps({
            div: '#map',
            lat: origin.lat,
            lng: origin.lng
        });
        @foreach($race->race_points as $point)
        map.addMarker({
            lat: 33.663269,
            lng: -112.233738,
            title: 'Glendale',
            click: function(e) {
                alert('You clicked in this marker');
            }
        });
        @endforeach

        $('input[name="address"]').change(function(e) {
            console.log($(this).val());
            
            var latlng;

            GMaps.geocode({
                address: $(this).val(),
                callback: function(results, status) {
                    if (status == 'OK') {
                        latlng = results[0].geometry.location;
                        map.setCenter(latlng.lat(), latlng.lng());
                        



                        // map.drawRoute({
                        //     origin: [origin.lat, origin.lng],
                        //     destination: [latlng.lat(), latlng.lng()],
                        //     travelMode: 'biking',
                        //     strokeColor: 'red',
                        //     strokeOpacity: 0.5,
                        //     strokeWeight: 6
                        // });

                        // url = GMaps.staticMapURL({
                        //     size: [610, 300],
                        //     lat: -12.043333,
                        //     lng: -77.028333,
                        //     markers: [
                        //         {lat: 33.6747, lng: -112.232},
                        //         {lat: -12.045333, lng: -77.034,
                        //             size: 'small'},
                        //         {lat: -12.045633, lng: -77.022,
                        //             color: 'blue'}
                        //     ]
                        // });

                        // $('<img/>').attr('src', url)
                        //     .appendTo('#map');

                    }
                }
            });

        });

    });

    </script>
@endforeach
@endsection