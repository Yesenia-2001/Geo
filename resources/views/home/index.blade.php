@extends('layouts.app-master')

@section('content')

<head>
    <title>Mapa</title>
</head>
<body>
  <div id="map"></div>
  
  <script>
    function iniciarMap(){
      var coord = {lat:-11.0063927 ,lng: -74.8046517};
      var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 10,
        center: coord
      });
      var marker = new google.maps.Marker({
        position: coord,
        map: map
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>

@endsection
