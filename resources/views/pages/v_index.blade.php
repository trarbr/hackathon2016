<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trash & Charity</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/v_style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default container-fluid">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">Trash & Charity - Make a choice!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<!--
<div class="welcome">
    <div class="container">
        <div class="col-xs-12 col-md-6 ">
            <h1>Where is the closest trash can?</h1>
        </div>
        <div class="search">
            <div class="col-xs-12 col-md-6 text-right">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your address</label>
                        <input type="text" placeholder="Search after you address" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Find trash can!</button>
                </form>
            </div>
        </div>
    </div>
</div>
-->

<div class="container-fluid-full">
        <div id="map">

        </div>


        <div id="mapnavcont">
            <form action="#">
                Street
                <input type="search" name="address" placeholder="name of the street...">
            </form>


            <ul>
                <li>
                    <button id="generalWaste" onclick="mdamGenWaste()">
                        <img src="images/trash-glyph-icon_fy3MDpLO_L.png" alt="On/off General Waste">
                        <p>general Waste </p>
                    </button>
                    <button id="generalWaste2" onclick="mdamGenWaste2()">
                        <img src="images/trash-glyph-icon_fy3MDpLO_L.png" alt="On/off General Waste">
                        <p>general Waste </p>
                    </button>
                </li>
                <li>
                    <button id="paper" onclick="mdamPaper()">
                        <img src="images/paper-airplane-stroke-icon_f13_S8Ud_L.png" alt="On/off Paper">
                        <p>paper</p>
                    </button>
                    <button id="paper2" onclick="mdamPaper2()">
                        <img src="images/paper-airplane-stroke-icon_f13_S8Ud_L.png" alt="On/off Paper">
                        <p>paper</p>
                    </button>
                </li>
                <li>
                    <button id="pant" onclick="mdamPant()">
                        <img src="images/bottle-glyph-icon_fyhAh3Lu_L.png" alt="On/off Pant">
                        <p>pant</p>
                    </button>
                    <button id="pant2" onclick="mdamPant2()">
                        <img src="images/bottle-glyph-icon_fyhAh3Lu_L.png" alt="On/off Pant">
                        <p>pant</p>
                    </button>
                </li>
                <li>
                    <button id="glass" onclick="mdamGlass()">
                        <img src="images/glass.png" alt="On/off Glass">
                        <p>glass</p>
                    </button>
                    <button id="glass2" onclick="mdamGlass2()">
                        <img src="images/glass.png" alt="On/off Glass">
                        <p>glass</p>
                    </button>
                </li>
                <li>
                    <button id="batteries" onclick="mdamBatteries()">
                        <img src="images/battery-6-glyph-icon_GJEYn2UO_L.png" alt="On/off Batteries">
                        <p>batteries</p>
                    </button>
                    <button id="batteries2" onclick="mdamBatteries2()">
                        <img src="images/battery-6-glyph-icon_GJEYn2UO_L.png" alt="On/off Batteries">
                        <p>batteries</p>
                    </button>
                </li>
                <li>
                    <button id="charity" onclick="mdamCharity()">
                        <img src="images/t-shirt-glyph-icon_zkE1v68u_L.png" alt="On/off Charity">
                        <p>charity</p>
                    </button>
                    <button id="charity2" onclick="mdamCharity2()">
                        <img src="images/t-shirt-glyph-icon_zkE1v68u_L.png" alt="On/off Charity">
                        <p>charity</p>
                    </button>
                </li>

                <li>
                    <button id="sechand" onclick="mdamSechand()">
                        <img src="images/2handstore.png" alt="On/off 2. Hand Stores">
                        <p>2. hand stores</p>
                    </button>
                    <button id="sechand2" onclick="mdamSechand2()">
                        <img src="images/2handstore.png" alt="On/off 2. Hand Stores">
                        <p>2. hand stores</p>
                    </button>
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

            //Pictures
            var generalWastePic = 'images/trash-glyph-icon_fy3MDpLO_L_resized.png';
            var paperPic = 'images/paper-airplane-stroke-icon_f13_S8Ud_L_resized.png';
            var charityPic = 'images/t-shirt-glyph-icon_zkE1v68u_L kopi_resized.png';
            var batteriesPic = 'images/battery-6-glyph-icon_GJEYn2UO_L_resized.png';
            var pantPic = 'images/bottle-glyph-icon_fyhAh3Lu_L_resized.png';
            var glassPic = 'images/glass_resized.png';
            var sechandPic = 'images/2handstore_resized.png';

            // VARIABLES CONTAINING THE GEO LOCATIONS
            var generalWasteGeo = [ ["55.402403", "10.385522"], ["55.389733", "10.363276"] ];
            var paperGeo = [ ["55.395388", "10.402494"], ["55.410737", "10.399881"] ];
            var pantGeo = [ ["55.397738", "10.392915"], ["55.422620", "10.360700"], ["55.398940", "10.383703"] ];
            var glassGeo = [ ["55.407586", "10.361147"], ["55.386334", "10.417280"], ["55.388204", "10.436706"] ];
            var batteriesGeo = [ ["55.406373", "10.395450"], ["55.401182", "10.351430"] ];
            var charityGeo = [ ["55.406611", "10.396681"], ["55.406416", "10.437536"], ["55.395694", "10.354624"] ];
            var sechandGeo = [ ["55.403285", "10.371147"], ["55.395658", "10.398721"] ];


            var countPaper = paperGeo.length;
            var countGenWaste = generalWasteGeo.length;
            var countPant = pantGeo.length;
            var countGlass = glassGeo.length;
            var countBatteries = batteriesGeo.length;
            var countCharity = charityGeo.length;
            var countSechand = sechandGeo.length;


            var map;
            /* SNAK MED VIGAN OM DET HER!!
             function mdamSechand3() {
             sechandGeo = [];
             initMap();
             $("#sechand").hide();
             $("#sechand2").show();
             }

             function mdamSechand4() {
             sechandGeo = [ ["55.403285", "10.371147"], ["55.395658", "10.398721"] ];
             initMap();
             $("#sechand").show();
             $("#sechand2").hide();
             } */



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


            // INFOWINDOW Text
            var contentString1 = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Uluru1</h1>'+
                    '<div id="bodyContent">'+
                    '<p>Blah blah blah </p>'+
                    '</div>'+
                    '</div>';

            var contentString2 = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Uluru2</h1>'+
                    '<div id="bodyContent">'+
                    '<p>Blah blah blah </p>'+
                    '</div>'+
                    '</div>';


            function initMap() {

                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 55.402403, lng: 10.385522},
                    scrollwheel: false,
                    streetViewControl: false,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_TOP
                    },
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


                //INFO WINDOW CONTENT TO CONTENSTRING
                var infowindow1 = new google.maps.InfoWindow({
                    content: contentString1
                });

                var infowindow2 = new google.maps.InfoWindow({
                    content: contentString2
                });


                function sechandFunc1() {
                    function adress1() {

                        marker1 = new google.maps.Marker({
                            position: new google.maps.LatLng(sechandGeo[0][0], sechandGeo[0][1]),
                            map: map,
                            icon: sechandPic
                        });
                        marker1.addListener('click', function() {
                            infowindow1.open(map, marker1);
                        });
                    }



                    function adress2() {

                        marker2 = new google.maps.Marker({
                            position: new google.maps.LatLng(sechandGeo[1][0], sechandGeo[1][1]),
                            map: map,
                            icon: sechandPic
                        });
                        marker2.addListener('click', function() {
                            infowindow2.open(map, marker2);
                        });
                    }
                    adress1();
                    adress2();
                }


                // RUN THE FUNCTIONS FOR GEOLOCATION
                generalWasteFunc();
                paperFunc();
                pantFunc();
                glassFunc();
                batteriesFunc();
                charityFunc();
                sechandFunc();
                //sechandFunc1();

            }


        </script>


        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgNgm0F35m5uI_elKUjTAWpHVaFHb_KA&callback=initMap">
        </script>
</div>

<div class="newsletter">
    <div class="container">
        <div class="col-xs-12 col-md-6">
            <h2>Remember to take the trash can out <br /> <span class="bg-blue">- sign up to get a reminder!</span></h2>
            <br />
            <video width="100%" height="100%" controls>
                <source src="/video/intro.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>
        <div class="col-xs-12 col-md-6">
            <strong id="sub_msg" class="hidden">You have now subscribed!</strong>
            <form role="form" id="sub_form">
                <div class="form-group">
                    <label for="sub_email">Email address:</label>
                    <input type="email" class="form-control" id="sub_email">
                </div>
                <div class="form-group">
                    <label for="sub_mobile">Mobile:</label>
                    <input type="number" class="form-control" id="sub_mobile">
                </div>
                <div class="form-group">
                    <label for="sub_street">Street:</label>
                    <input type="text" class="form-control" id="sub_street">
                </div>
                <div class="form-group">
                    <label for="sub_zipcode">Zipcode:</label>
                    <input type="number" class="form-control" id="sub_zipcode">
                </div>
                <div class="form-group">
                    <label for="sub_notify">Notification type:</label>
                    <select class="form-control" id="sub_notify">
                        <option value="email">E-mail</option>
                        <option value="mobile">Mobile</option>
                        <option value="all">Both</option>
                    </select>
                </div>
                <a class="btn btn-success container-fluid-full btn-lg" id="sub_btn">Subscribe now!</a>
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container text-center" id="unsubscribe-hidden">
        <p id="unsubscribe-msg"></p>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <form role="form" class="form-inline">
            <div class="form-group">
                <input type="text" placeholder="Your e-mail" class="form-control" id="btn-unsubscribe-field">
                <a class="btn btn-success btn-sm" id="btn-unsubscribe-go">Unsubscribe</a>
            </div>
        </form>
        <br/><br/>
    </div>
    <div class="container text-center">
        &copy; <?php echo date('Y'); ?> Copyright Trash & Charity
        <a class="btn btn-info btn-xs pull-right" id="btn-unsubscribe-open">Unsubscribe</a>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(function ($) {

        $("#unsubscribe-hidden").toggle('hidden');

        /**********************
         * UNSUBSCRIBE
         **********************/

        $("#btn-unsubscribe-open").click(function () {
            $("#unsubscribe-hidden").toggle('hidden');

            $("#btn-unsubscribe-go").click(function () {
                var email = $("#btn-unsubscribe-field").val();
                $.get("unsubscribe/" + email, function (data) {
                    $("#btn-unsubscribe-field").val("");
                    $("#unsubscribe-msg").html("You have now unsubscribed!");
                });
            });
        });

        /**********************
         * SUBSCRIBE
         **********************/

        $("#sub_btn").click(function () {
            var sub_email = $("#sub_email").val();
            var sub_mobile = $("#sub_mobile").val();
            var sub_street = $("#sub_street").val();
            var sub_zipcode = $("#sub_zipcode").val();
            var sub_notify = $("#sub_notify").val();
            $.ajax({
                url: '/subscribe',
                type: 'post',
                data: {
                    email: sub_email,
                    street: sub_street,
                    zipcode: sub_zipcode,
                    mobile: sub_mobile,
                    notification_type: sub_notify
                },
                success: function (data) {
                    if(data == "ok") {
                        $('#sub_form').slideUp(500);
                        $('#sub_msg').removeClass('hidden');
                    } else {
                        console.log("Røget ind i success men stadig fejl: " + data);
                        alert("FEJL!");
                    }
                }, error: function (data) {
                    console.log("Error: " + data);
                    alert("FEJL!");
                }
            });
        });
    });
</script>
</body>
</html>