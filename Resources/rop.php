<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Rules of Procedure</title>
   <?php
(include '../headSub.php');
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
(include '../navSub.php');
?>
<?php
(include '../sliders.php');
?>
    
    <div class="backgroundcontainer">
        <div class="container" style="background-color:#FFF;color:#1792A7;">
            <h2> Rules of Procedure</h2>
            <p>At any MUN conference, the Rules of Procedure aren’t intended to be yet another esoteric hoop to jump through. While it may appear strange and constricting to discuss issues in such a regulating format, the Rules of Procedure are designed to give structure to a committee session, enable various kinds of debate, and encourage the participation of all member states.</p>
            
            <h4 class="resourcetitle1">Long Form Rules of Procedure</h4>
            <iframe src="https://drive.google.com/file/d/0B1l4VjsM9gtAU29MWWx1ZzgzTlE/preview" width="100%" height="450em"></iframe>
            <h4 class="resourcetitle2">To download the <b>Long Form Rules of Procedure</b>, please click <a href="Files/PACMUNLongFormROP.pdf" download="PACMUNlongformROP.pdf">here</a></h4>
            
            <h4 class="resourcetitle1">Flow of Debate</h4>
            <img src="Files/flowofdebate.png" style="width: 100%; margin: 0; padding: 0;">
            <h4 class="resourcetitle2">To download the <b>Flow of Debate</b>, please click <a href="Files/flowofdebate.png" download="PACMUNflowofdebate.png">here</a></h4>
            
            <h4 class="resourcetitle1">EDUMUN PowerPoint on ROP</h4>
            <iframe src="https://drive.google.com/a/pacificmun.com/file/d/0B1l4VjsM9gtAOFNGRmtSTDc1RzQ/preview" width="100%" height="450em"></iframe>
            <h4 class="resourcetitle2">To download the <b>EDUMUN PowerPoint on ROP</b>, please click <a href="Files/Rules-of-Procedure.pptx" download="EDUMUN2015ROP.pptx">here</a></h4>
       
            
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>
                                                            
    <footer>
        <div class="containerNOT">
            <div class="row">
            </div>
			</div>
        <?php
(include '../footer.php');
?>
    </footer>
    
</body>

</html>