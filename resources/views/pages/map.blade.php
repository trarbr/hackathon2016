<!DOCTYPE html>
<html>
    <head>
        <title>Trash And Charity</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/map.style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        
        
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
                
            
            <div id="mapnavcont"> 
                <ul>
                    <li>
                        <button id="generalWaste" onclick="mdamGenWaste()">General Waste</button>
                        <button id="generalWaste2" onclick="mdamGenWaste2()">General Waste2</button>
                    </li>
                    <li>
                        <button id="paper" onclick="mdamPaper()">Paper</button>
                        <button id="paper2" onclick="mdamPaper2()">Paper2</button>
                    </li>
                    <li>
                        <button id="pant" onclick="mdamPant()">Pant</button>
                        <button id="pant2" onclick="mdamPant2()">Pant2</button>
                    </li>
                    <li>
                        <button id="glass" onclick="mdamGlass()">Glass</button>
                        <button id="glass2" onclick="mdamGlass2()">Glass2</button>
                    </li>
                    <li>
                        <button id="batteries" onclick="mdamBatteries()">Batteries</button>
                        <button id="batteries2" onclick="mdamBatteries2()">Batteries2</button>
                    </li>
                    <li>
                        <button id="charity" onclick="mdamCharity()">charity</button>
                        <button id="charity2" onclick="mdamCharity2()">charity2</button>
                    </li>
                    <li>
                        <button id="charity" onclick="mdamCharity()">charity</button>
                        <button id="charity2" onclick="mdamCharity2()">charity2</button>
                    </li>
                    <li>
                        <button id="sechand" onclick="mdamSechand()">2. Hand Stores</button>
                        <button id="sechand2" onclick="mdamSechand2()">2. Hand Stores2</button>
                    </li>
                    
                </ul>
            </div>
                
        <script type="text/javascript">
            $("#generalWaste2").hide();
            $("#paper2").hide();
            $("#pant2").hide(); 
            $("#glass2").hide();
            $("#batteries2").hide();
            $("#charity2").hide();
            $("#sechand2").hide();
            
            // VARIABLES CONTAINING THE GEO LOCATIONS   
            var generalWasteGeo = [ ["55.402403", "10.385522"], ["55.389733", "10.363276"] ];
            var paperGeo = [ ["55.395388", "10.402494"], ["55.410737", "10.399881"] ];
            var pantGeo = [ ["55.397738", "10.392915"] ];
            var glassGeo = [ ["55.407586", "10.361147"], ["55.386334", "10.417280"] ];    
            var batteriesGeo = [ ["55.406373", "10.395450"], ["55.401182", "10.351430"] ]; 
            var charityGeo = [ ["55.406611", "10.396681"], ["55.406416", "10.437536"], ["55.395694", "10.354624"] ]; 
            var sechandGeo = [ ["55.405429", "10.390244"], ["55.403285", "10.371147"] ]; 
            
            
            var countPaper = paperGeo.length;
            var countGenWaste = generalWasteGeo.length;
            var countPant = pantGeo.length;
            var countGlass = glassGeo.length;
            var countBatteries = batteriesGeo.length;
            var countCharity = charityGeo.length;
            var countSechand = sechandGeo.length;
            
            
            var map;
            
            function mdamSechand() { 
              countSechand = 0;
              initMap();
              $("#sechand").hide();
              $("#sechand2").show();
            }
            
            function mdamSechand2() {
               countSechand = sechandGeo.length;
               initMap();
               $("#sechand").show();
               $("#sechand2").hide();
            }
            
            function mdamCharity() { 
              countCharity = 0;
              initMap();
              $("#charity").hide();
              $("#charity2").show();
            }
            
            function mdamCharity2() {
               countCharity = charityGeo.length;
               initMap();
               $("#charity").show();
               $("#charity2").hide();
            }
            
            function mdamBatteries() { 
              countBatteries = 0;
              initMap();
              $("#batteries").hide();
              $("#batteries2").show();
            }
            
            function mdamBatteries2() {
               countBatteries = batteriesGeo.length;
               initMap();
               $("#batteries").show();
               $("#batteries2").hide();
            }
            
            function mdamGlass() { 
              countGlass = 0;
              initMap();
              $("#glass").hide();
              $("#glass2").show();
            }
            
            function mdamGlass2() {
               countGlass = glassGeo.length;
               initMap();
               $("#glass").show();
               $("#glass2").hide();
            }
            
            function mdamGenWaste() {
                countGenWaste = 0;
                initMap(); 
                $("#generalWaste").hide();
                $("#generalWaste2").show();
            }
            
            function mdamGenWaste2() {
                countGenWaste = generalWasteGeo.length;
                initMap(); 
                $("#generalWaste").show();
                $("#generalWaste2").hide();
            }
           
            function mdamPaper() { 
              countPaper = 0;
              initMap();
              $("#paper").hide();
              $("#paper2").show();
            }
            
            function mdamPaper2() {
                countPaper = paperGeo.length;
                initMap();
                $("#paper").show();
                $("#paper2").hide();
            }
            
            
            function mdamPant() { 
              countPant = 0;
              initMap();
              $("#pant").hide();
              $("#pant2").show();
            }
            
            function mdamPant2() {
               countPant = pantGeo.length;
               initMap();
               $("#pant").show();
               $("#pant2").hide();
            }
            
            function initMap() {
                
                //Pictures
                var generalWastePic = 'images/trash-glyph-icon_fy3MDpLO_L_resized.png';
                var paperPic = 'images/paper-airplane-stroke-icon_f13_S8Ud_L_resized.png'; 
                var charityPic = 'images/t-shirt-glyph-icon_zkE1v68u_L kopi_resized.png';
                var batteriesPic = 'images/battery-6-glyph-icon_GJEYn2UO_L_resized.png';
                var pantPic = 'images/bottle-glyph-icon_fyhAh3Lu_L_resized.png';
                var glassPic = 'images/glass_resized.png';
                var sechandPic = 'images/2handstore_resized.png';



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
                    scrollwheel: false,
                    zoom: 13

                });

                function generalWasteFunc() {
                    var marker, i;
                    for (i = 0; i < countGenWaste; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(generalWasteGeo[i][0], generalWasteGeo[i][1]),
                        map: map,
                        icon: generalWastePic
                      });
                    }
                }


                function paperFunc() {
                    var marker, i;
                    for (i = 0; i < countPaper; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(paperGeo[i][0], paperGeo[i][1]),
                        map: map,
                        icon: paperPic
                      });
                    }
                }
                
                function pantFunc() {
                    var marker, i;
                    for (i = 0; i < countPant; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pantGeo[i][0], pantGeo[i][1]),
                        map: map,
                        icon: pantPic
                      });
                    }
                }
                
                function glassFunc() {
                    var marker, i;
                    for (i = 0; i < countGlass; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(glassGeo[i][0], glassGeo[i][1]),
                        map: map,
                        icon: glassPic
                      });
                    }
                }
                
                function batteriesFunc() {
                    var marker, i;
                    for (i = 0; i < countBatteries; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(batteriesGeo[i][0], batteriesGeo[i][1]),
                        map: map,
                        icon: batteriesPic
                      });
                    }
                }
                
                function charityFunc() {
                    var marker, i;
                    for (i = 0; i < countCharity; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(charityGeo[i][0], charityGeo[i][1]),
                        map: map,
                        icon: charityPic
                      });
                    }
                }
                
                function sechandFunc() {
                    var marker, i;
                    for (i = 0; i < countSechand; i++) {  
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(sechandGeo[i][0], sechandGeo[i][1]),
                        map: map,
                        icon: sechandPic
                      });
                    }
                }
                
            // RUN THE FUNCTIONS FOR GEOLOCATION
            generalWasteFunc();
            paperFunc();
            pantFunc();
            glassFunc();
            batteriesFunc();
            charityFunc();
            sechandFunc();
            


            //--------------------------------------------------------
            /* INFO WINDOW
            var infowindow = new google.maps.InfoWindow({
            content: contentString
            });
            */
            //-----------------------------------------------------------

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
