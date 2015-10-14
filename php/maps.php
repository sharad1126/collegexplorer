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
            lat: 28.5450,
            lng: 77.1922
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
</head>

<body>
    <!-- navbar -->
    <section id="navbar">
        <nav class="navbar navbar-default" style="background-color: rgba(51,51,51,0.8);opacity: 1;text-align: center;border-radius:0px;height: 60px;top: 0;left: 0;width: 100%;z-index: 100;box-shadow: 2px 7px 7px rgba(100,100,100,0.49);border:none;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="collegexplorer.html" style="width: 130px;height: 25px;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <div class="menu-menu-glowne-en-container">
                            <ul id="menu-menu-glowne-en" class="menu">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map5.php"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#team"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#contact"><span data-hover="CONTACT US">CONTACT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div id="map"></div>
    <div id="right-panel">
        <h2>Results</h2>
        <ul id="places"></ul>
        <button id="more">More results</button>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaJ9X-a9h6rAQ6zY4FRnFP75MXDwj-luY&signed_in=true&libraries=places&callback=initMap" async defer></script>
</body>

</html>
