<?php require_once "connect.php" ?>
<?php 
if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                    $result= mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                    $latitude = $row['latitude'];
                    $longitude = $row['longitude']; 
                }
                ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.png" />
    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    
    #map {
        height: 100%;
    }
    
    #right-panel {
        font-family: 'Roboto', 'sans-serif';
        line-height: 30px;
        padding-left: 10px;
    }
    
    #right-panel select,
    #right-panel input {
        font-size: 15px;
    }
    
    #right-panel select {
        width: 100%;
    }
    
    #right-panel i {
        font-size: 12px;
    }
    </style>
    <title>Place search pagination</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=true"></script>
    <script>
    var map;

    function initMap() {
        var pyrmont = {
            lat: <?php echo $latitude; ?>,
            lng: <?php echo $longitude; ?>
        };

        map = new google.maps.Map(document.getElementById('map'), {
            center: pyrmont,
            zoom: 17
        });

        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
            location: pyrmont,
            radius: 500,
            types: ['store']
        }, processResults);
    }

    function processResults(results, status, pagination) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
            return;
        } else {
            createMarkers(results);

            if (pagination.hasNextPage) {
                var moreButton = document.getElementById('more');

                moreButton.disabled = false;

                moreButton.addEventListener('click', function() {
                    moreButton.disabled = true;
                    pagination.nextPage();
                });
            }
        }
    }

    function createMarkers(places) {
        var bounds = new google.maps.LatLngBounds();
        var placesList = document.getElementById('places');

        for (var i = 0, place; place = places[i]; i++) {
            var image = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            var marker = new google.maps.Marker({
                map: map,
                icon: image,
                title: place.name,
                position: place.geometry.location
            });

            placesList.innerHTML += '<li>' + place.name + '</li>';

            bounds.extend(place.geometry.location);
        }
        map.fitBounds(bounds);
    }
    </script>
    <style>
    #right-panel {
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        right: 5px;
        top: 60%;
        margin-top: -195px;
        height: 330px;
        width: 200px;
        padding: 5px;
        z-index: 5;
        border: 1px solid #999;
        background: #fff;
    }
    
    h2 {
        font-size: 22px;
        margin: 0 0 5px 0;
    }
    
    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        height: 271px;
        width: 200px;
        overflow-y: scroll;
    }
    
    li {
        background-color: #f1f1f1;
        padding: 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    
    li:nth-child(odd) {
        background-color: #fcfcfc;
    }
    
    #more {
        width: 100%;
        margin: 5px 0 0 0;
    }
    </style>
     <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-67982495-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
    
    <div id="map"></div>
    <div id="right-panel">
        <h2>Results</h2>
        <ul id="places"></ul>
        <button id="more">More results</button>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaJ9X-a9h6rAQ6zY4FRnFP75MXDwj-luY&signed_in=true&libraries=places&callback=initMap" async defer></script>
</body>

</html>
