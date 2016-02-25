<!DOCTYPE html>
<html>
    <head>
        <title>Trash And Charity</title>

        <link rel="stylesheet" type="text/css" href="C:\wamp\www\hackathon-backup240216 (1)\hackathon\public\css\style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        
        <script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		function initialize() {
		var mapProp = {
		center:new google.maps.LatLng(51.508742,-0.120850),
		zoom:5,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	  	};
	  	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>

    </head>


<body>
        <div id="header">
        	<div class="logo"><img height="80%" width="80%" src="/images/trash-glyph-icon_fy3MDpLO_L.png" />
            </div>
        
        	<nav>
            <ul>
            	<li class="background-yellow"><a href="#" class="menulinkstyle"></a></li>
                <li class="background-blue"><a href="#" class="menulinkstyle"></a></li>
                <li class="background-green"><a href="#" class="menulinkstyle"></a></li>
            </ul>                   
            </nav>
              
        </div>
        
        
        
        
        <!-- Her er hovedindhold til forsiden -->
        <div class="container">
        
        <div >
        <h1>Where is the closest trash can?</h1>
        <input id="search" type="text" name="search" placeholder="Search...">
        
        </div>
        
            <div class="map"><div id="googleMap" style=""></div></div>
         	
            <div id="content">
            <div class="video"><video autoplay width="100%"><source src="movie.mp4" type="video/mp4" style="width:59%; height:200px;"></video>
            </div>
            <div class="signup">
            	<h3 id="uppertext">Do you need a</h3>
                <h2> REMINDER</h2>
                <h3 id="lowertext" >to take the trash can out?</h3>
            
            
            <div class="notifications">
                <div class="notification-1">
                Street:<br />
                City:<br />
                Notification by:<br />
                </div>
                
                <div class="notification-2">
                <form class="form">
                    <input type="text" name="street" placeholder="street"><br>
                    <input type="text" name="city" placeholder="city"><br>
                    <input style="margin-top:2px;"type="button" name="sms">
                    <input style="margin-top:2px;"type="button" name="mail">
                    <input type="text" name="phone" placeholder="phone number">
                    <input type="text" name="email" placeholder="email">
                    
                </form>
                </div>
                <input id="submit" type="button" name="submit" value="Sign Up">       
            </div>
            
                            
            
            </div>

            
            </div>

            <div id="news">

                <div id="style1" class="news">

                    <figure> 

                        
                    </figure>

                    <article>

                        <h1 class="headline">News Headline</h1>
                        <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's 
                         standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type
                          and scrambled it to make a type specimen book. 
                          It has survived not only five centuries, but also the leap 
                          into electronic typesetting, remaining essentially unchanged. 
                          It was popularised in the 1960s with the release of Letraset 
                          sheets containing Lorem Ipsum passages, and more recently with
                           desktop publishing software
                         like Aldus PageMaker including versions of Lorem Ipsum.</p>


                    </article>


                </div>

                    <div id="style2" class="news">

                    <figure> 

                        <img src="####">

                    </figure>

                    <article>

                        <h1 class="headline">News Headline</h1>
                        <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's 
                         standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type
                          and scrambled it to make a type specimen book. 
                          It has survived not only five centuries, but also the leap 
                          into electronic typesetting, remaining essentially unchanged. 
                          It was popularised in the 1960s with the release of Letraset 
                          sheets containing Lorem Ipsum passages, and more recently with
                           desktop publishing software
                         like Aldus PageMaker including versions of Lorem Ipsum.</p>


                    </article>
                    

                </div>

                    <div id="style1" class="news">

                    <figure> 

                        <img src="####">

                    </figure>

                    <article>

                        <h1 class="headline">News Headline</h1>
                        <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's 
                         standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type
                          and scrambled it to make a type specimen book. 
                          It has survived not only five centuries, but also the leap 
                          into electronic typesetting, remaining essentially unchanged. 
                          It was popularised in the 1960s with the release of Letraset 
                          sheets containing Lorem Ipsum passages, and more recently with
                           desktop publishing software
                         like Aldus PageMaker including versions of Lorem Ipsum.</p>


                    </article>
                    

                </div>


            </div>

        </div>

        
        <footer>
       		<p>
            hallo</p>
        </footer>
        
</body>

</html>
	

