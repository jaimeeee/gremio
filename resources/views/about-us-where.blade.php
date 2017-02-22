@extends('layouts.site')

@section('content')
  <div class="container">
    <h2 class="stencil">Visítanos y<br><strong>hablemos de tu proyecto.</strong></h2>
  </div>
  <div class="container">
    <div id="map" style="width: 100%; height: 296px;"></div>
  </div>
  <div id="where-photos" class="container">
    <div class="item text">
      <div class="content">
        <p>Ubicado en una antigua huerta en la colonia Seattle. El estudio combina un entorno natural con espacios contemporáneos que fomentan la creatividad y el intercambio de ideas entre los equipos creativos que forman parte del equipo.</p>
        <span>–</span>
      </div>
    </div>
    <div class="item"><img src="{{ asset('images/where-1.jpg') }}" class="image-fill" data-width="1053" data-height="591"></div>
    <div class="item"><img src="{{ asset('images/where-2.jpg') }}" class="image-fill" data-width="1056" data-height="583"></div>
    <div class="item"><img src="{{ asset('images/where-3.jpg') }}" class="image-fill" data-width="1055" data-height="586"></div>
  </div>
@endsection

@section('footer')
  <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script>
    var map;
    function initMap() {
      var coords = {lat: 20.7225434, lng: -103.3828883};
      
      var map = new google.maps.Map(document.getElementById('map'), {
        center: coords,
        zoom: 17
      });
      
      var marker = new google.maps.Marker({
        position: coords,
        map: map,
        title: 'Gremiodiseño',
        icon: {
          url: "{{ asset('/images/maps-marker@2x.png') }}",
          size: new google.maps.Size(54, 74),
          scaledSize: new google.maps.Size(27, 37),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(12, 37)
        }
      });
      
      var styles = [
        {
          "featureType": "all",
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "labels.text",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative.neighborhood",
          "elementType": "labels.text",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#e4851f"
            }
          ]
        },
        {
          "featureType": "administrative.neighborhood",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [
            {
              "lightness": 30
            },
            {
              "saturation": 30
            },
            {
              "color": "#353435"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "saturation": 20
            },
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text",
          "stylers": [
            {
              "color": "#666666"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "lightness": 10
            },
            {
              "saturation": -30
            },
            {
              "gamma": "3.02"
            },
            {
              "color": "#e4851f"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#000000"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#686868"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#d8d8d9"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#484848"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#a8a8a8"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "all",
          "stylers": [
            {
              "lightness": -20
            },
            {
              "visibility": "on"
            },
            {
              "color": "#444444"
            }
          ]
        }
      ];

      map.setOptions({styles: styles});
    }
  </script>
  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDPN7xiCgXoqITWJYFaFSAv4fZtjROP_eQ&amp;callback=initMap" async defer></script>
@endsection
