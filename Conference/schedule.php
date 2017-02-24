<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Schedule</title>
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
    <div class="container" style="background-color:#FFF;color:#1792A7;">
       <div class="confbar">
            <table id="confpages">
                <tr>
                        <td><a class="conftitle" href="../Conference/venue.php">Venue</a></td>
                        <td><a class="conftitle" href="../Conference/schedule.php">Schedule</a></td>
                        <td><a class="conftitle" href="../conference-policies.php">Policies</a></td>
                        <td><a class="conftitle" href="../Conference/keynote.php">Keynote Speaker</a></td>
                        
                </tr>
                </table>
            </div>
            
                
                <h2>Conference Schedule</h2>
            <img src="../Photos/websiteschedule.png" style="width: 100%; padding: 0; margin: 0;">
            <h4 class="resourcetitle2">To download the <b>Conference Schedule</b>, please click <a href="../Photos/schedule.png" download="PACMUN2016schedule.png">here</a></h4>

                  
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
   
                                                            
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