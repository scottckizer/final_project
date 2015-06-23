<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <script src="main.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/javascript/gmaps.js"></script>
    <script type="text/javascript">

    var map;
    var origin = {
        lat: 33.5107383,
        lng: -111.9087771
    }

    $(function() {
        map = new GMaps({
            div: '#map',
            lat: origin.lat,
            lng: origin.lng
        });

        $('input[name="address"]').change(function(e) {
            console.log($(this).val());
            
            var latlng;

            GMaps.geocode({
                address: $(this).val(),
                callback: function(results, status) {
                    if (status == 'OK') {
                        latlng = results[0].geometry.location;
                        map.setCenter(latlng.lat(), latlng.lng());
                        map.addMarker({
                            lat: latlng.lat(),
                            lng: latlng.lng()
                        });

                        map.drawRoute({
                            origin: [origin.lat, origin.lng],
                            destination: [latlng.lat(), latlng.lng()],
                            travelMode: 'biking',
                            strokeColor: 'red',
                            strokeOpacity: 0.5,
                            strokeWeight: 6
                        });

                        url = GMaps.staticMapURL({
                            size: [610, 300],
                            lat: -12.043333,
                            lng: -77.028333,
                            markers: [
                                {lat: -12.043333, lng: -77.028333},
                                {lat: -12.045333, lng: -77.034,
                                    size: 'small'},
                                {lat: -12.045633, lng: -77.022,
                                    color: 'blue'}
                            ]
                        });

                        $('<img/>').attr('src', url)
                            .appendTo('#map');

                    }
                }
            });



        });


    });

    </script>
</head>
<body>
    <header>
        <h1>Bike Racer</h1>
        <a href="/auth/register">
            <i class="fa fa-bars fa-2x"></i>
        </a>
    </header>
    
    @yield('main')

</body>
</html>