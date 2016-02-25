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
                        <button id="generalWaste2" onclick="mdamGenWaste2()">General Waste</button>
                    </li>
                    <li>
                        <button id="paper" onclick="mdamPaper()">Paper</button>
                    </li>
                    <li>
                        <button id="pant" onclick="mdamPant()">Pant</button>
                    </li>
                    
                </ul>
            </div>
                
        <script type="text/javascript">
               
            
            // VARIABLES CONTAINING THE GEO LOCATIONS   
            var generalWasteGeo = [ ["55.402403", "10.385522"], ["55.389733", "10.363276"] ];
            var paperGeo = [ ["55.395388", "10.402494"], ["55.410737", "10.399881"] ];
            var pantGeo = [ ["55.397738", "10.392915"] ];
            
            var countPaper = paperGeo.length;
            var countGenWaste = generalWasteGeo.length;
            var countPant = pantGeo.length;
            
            var map;
            
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
            }
            
            function mdamPant() { 
              countPant = 0;
              initMap();
              $("#pant").hide();
            }
            
            //document.getElementById('generalWaste2').style.visibility = 'hidden';
            
            /*function showGeneralWaste2() {
                document.getElementById('generalWaste2').style.visibility = 'visible';
            }*/
            // FROM STACKOWERFLOW
                /*var hidden = false;
                function action() {
                    hidden = !hidden;
                    if(hidden) {
                        document.getElementById('generalWaste2').style.visibility = 'hidden';
                    } else {
                        document.getElementById('generalWaste2').style.visibility = 'visible';
                    }
                }*/
            
            
            
            
            
            function initMap() {
                var myLatLng = "55.402403, -10.385522";

                var myLatLng2 = "55.404766, -10.400160";

                //Pictures
                var generalWastePic = 'images/trash-glyph-icon_fy3MDpLO_L_resized.png';
                var paperPic = 'images/paper-airplane-stroke-icon_f13_S8Ud_L_resized.png'; 
                var charityPic = 'images/t-shirt-glyph-icon_zkE1v68u_L kopi_resized.png';
                var batteriesPic = 'images/battery-6-glyph-icon_GJEYn2UO_L_resized.png';
                var pantPic = 'images/bottle-glyph-icon_fyhAh3Lu_L_resized.png';
                var glassPic = 'images/glass_resized.png';



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
                
            function generalWasteFuncFull() {
                generalWasteFunc()
                $("#generalWaste2").hide();
            }
            
            // THESE FUNCTIONS WILL RUND WHEN THE PAGE INITIALLY LOADS
            generalWasteFuncFull()
            
            paperFunc();
            
            pantFunc();


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
