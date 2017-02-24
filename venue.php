<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Venue</title>
        <?php
include '../headSub.php';
?>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../style.css">
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
include '../navSub.php';
?>
    <?php
include '../sliders.php';
?>
    
    <div class="backgroundcontainer">
        <div class="confbar">
            <table id="confpages">
                <tr>
                        <td><a class="conftitle" href="../Conference/venue.php">Venue</a></td>
                        <td><a class="conftitle" href="../Conference/schedule.php">Schedule</a></td>
                        <td><a class="conftitle" href="../Conference/confpolicies.php">Policies</a></td>
                        <td><a class="conftitle" href="../Conference/keynote.php">Keynote Speaker</a></td>
                        
                </tr>
                </table>
            </div>
        <iframe width="100%" height="700" src="https://www.youtube.com/embed/I__5eVwQb80" frameborder="0" allowfullscreen></iframe>
        
        <div class="container" style="background-color:#FFF;color:#1792A7;padding:100px;">
            
<img id="westinlogo" src="../Photos/Westin_logo.gif">
            <h4>1900 5th Ave, Seattle, WA 98101</h4>
<p style="margin-top: 2em;">PACMUN 2016 will be held at The Westin Seattle in the heart of downtown Seattle. The Westin Seattle is an AAA Four Diamond award winning hotel, acclaimed for its great service, luxurious rooms and amenities, and excellent location. Delegates will room in groups of four in spacious rooms with two queen beds. Each room has a partial view of the city and is designed for maximum comfort, sporting a Heavenly Bed®, a Heavenly shower®, a television for relaxation, and much more. Delegates will find the Westin fully equipped to support diplomacy and debate in its 29 state of the art meeting facilitates. It is also the perfect place to relax and socialize out of committee with its welcoming communal spaces and accommodations. The Westin is ideally located in the center of Seattle in walking distance of many of Seattle’s best activities, attractions, and restaurants. If you have any questions about the venue, rooming, or room accommodations please contact us at sg@pacificmun.com.</p>
                  
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>
                                                            
    <footer>
        <div class="containerNOT">
            <div class="row">
				<div>
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
					<div style='overflow:hidden;height:400px;width:100%;'>
					
				<!--<div style="position:absolute;top:10;left:80%;z-index:10;">
					<div class="space-footer-info"><img src="PACMUN LOGO v8.2.jpg" width="135" style="margin-top:20px"></div>
				</div>
				<div style="position:absolute;top:10;left:10%;z-index:10;">
					<div class="row"> <div class="col-md-4">Join Us</div> <div class="col-md-8"> <div id="mc_embed_signup"> <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate=""> <div id="mc_embed_signup_scroll"> <div class="mc-field-group form-group"> <input value="" name="FNAME" class="required form-control" id="mce-FNAME" placeholder="Name" type="text"> </div> <div class="mc-field-group form-group"> <input value="" name="EMAIL" class="required form-control email" id="mce-EMAIL" placeholder="Email" type="email"> </div> <div class="clear"> <input value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-block btn-default" type="submit"> </div> </div> </form> </div> </div> </div>
				</div>-->
					
					<div id='gmap_canvas' style='height:400px;width:100%;'></div> <style> #gmap_canvas img { max-width: none!important; background: none!important } </style> </div> <script type='text/javascript'> function init_map() { var myOptions = { zoom: 11, center: new google.maps.LatLng(47.6135, -122.3382), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(47.6135, -122.3382) }); google.maps.event.addListener(marker, 'click', function() { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map); </script>
				</div>
			</div>
        </div>
    <?php
include '../footer.php';
?>
    </footer>
    
</body>

</html>