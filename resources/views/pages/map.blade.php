<!DOCTYPE html>
<html>
    <head>
        <title>Trash And Charity</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/map.style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
    </head>


<body>
        <div id="header">
        	<div class="logo">SPACE FOR LOGO
            </div>
        
        	<nav>
            <a href="#">menu1</a>
            <a href="#">menu1</a>
            <a href="#">menu1</a>                      
            </nav>   
        </div>
        
        <!-- Her er hovedindhold til forsiden -->
        <container class="container">
            <div id="map">
                
            </div>
            
            <script type="text/javascript">

            var map;
            function initMap() {
              var myLatLng = {lat: 55.402403, lng: 10.385522};
              
              var myLatLng2 = {lat: 55.404766, lng: 10.400160};
              
              var flasker = 'https://cdn3.iconfinder.com/data/icons/sympletts-free-sampler/128/circle-check-128.png';
              
              
              var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                    '</div>'+
                        '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                        '<div id="bodyContent">'+
                        '<p>Blah blah blah </p>'+
                    '</div>'+
                '</div>';
      
      
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 55.402403, lng: 10.385522},
                zoom: 13
              });
              
              
            var marker1 = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
            
            var marker2 = new google.maps.Marker({
                position: myLatLng2,
                map: map,
                title: 'Østersvinet',
                icon: flasker
            });
            
            var infowindow = new google.maps.InfoWindow({
            content: contentString
            });
            
            var flaskemarker = new google.maps.Marker({
              position: {lat: 55.398507, lng: 10.383704},
              map: map,
              icon: flasker
            });
            
            flaskemarker.addListener('click', function() {
                infowindow.open(map, flaskemarker);
              });
            }

        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgNgm0F35m5uI_elKUjTAWpHVaFHb_KA&callback=initMap">
        </script>
            
            
            
            
            
            
            
            
            <div class="video">SPACE FOR VIDEO
            </div>
            <div class="signup">SPACE FOR SIGNUP
            </div>
            <div class="news">SPACE FOR NEWS
            </div>
        </container>
        
        
        
        <footer>
       		
        </footer>
        
</body>
</html>
