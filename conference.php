<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2017- Conference</title>
      <?php
(include 'headRoot.php');
?>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">
	<link href='http://allfont.net/allfont.css?fonts=montserrat-light' rel='stylesheet' type='text/css'>
    <script src="https://googledrive.com/host/0BwTGSDhX5f5eMzdYNWljeXNvMk0"></script>
	
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" defer></script>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
    </script>
</head>
<body>
      <?php
(include 'navRoot.php');
?>
<?php
(include 'sliders.php');
?>
    <div class="backgroundcontainer">
        <div class="container" style="background-color:#FFF;color:#1792A7;padding:0px;">
            <h1>Conference</h1>
            <h4> Saturday, November 19th- Sunday, November 20th</h4>
            <div class="confbar">
            <table id="confpages">
                <tr>
                        <td><a class="conftitle" href="Conference/venue.php">Venue</a></td>
                        <td><a class="conftitle" href="Conference/schedule.php">Schedule</a></td>
                        <td><a class="conftitle" href=conference-policies.php>Policies</a></td>
                        <td><a class="conftitle" href="Conference/keynote.php">Keynote Speaker</a></td>
                        
                </tr>
                </table>
            </div>
        </div>
            
            <div class="containerNOT">
            <div class="row">
				<div>
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
					<div style='overflow:hidden;height:400px;width:100%;'>
					<div id='gmap_canvas' style='height:400px;width:100%;'></div> <style> #gmap_canvas img { max-width: none!important; background: none!important } </style> </div> <script type='text/javascript'> function init_map() { var myOptions = { zoom: 11, center: new google.maps.LatLng(47.6135, -122.3382), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(47.6135, -122.3382) }); google.maps.event.addListener(marker, 'click', function() { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map); </script>
				</div>
			</div>
        </div>
        <div class="container" style="background-color:#FFF;color:#1792A7;padding:50px;">
            <h4 style="text-align: center; color: #000">PACMUN 2017 will be held at <span style="color:#1792A7">The Westin Seattle</span> in the heart of downtown Seattle.</h4>
            <p>By interacting with the map, you can see nearby sightseeing opportunities, such as the Space Needle, Pike Place Market, and the EMP. Iconic landmarks like these are part of what makes Seattle such an amazing city! Being so close to all of the hustle and bustle of one of America's finest cities is one of the best parts of PACMUN. Immerse yourself for the weekend in a full-bodied MUN experience in the heart of the Emerald City. Meet people from all over the country, socialize, and make friends inside and outside of committee session. Take a break for awhile, and get your groove on at our delegate dance or relax with other social opportunities, such as LAN parties and game rooms. In addition, this year we are pleased to welcome an exciting, yet-to-be-announced keynote speaker! What are you waiting for? 
</p>
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>
    </div>

    <footer>
           <?php
(include 'footer.php');
?>
    </footer>
        
</body>

</html>