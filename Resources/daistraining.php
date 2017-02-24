<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Dais Training</title>
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
<h2>Dais Training</h2>
            
            <h4 class="resourcetitle1">EDUMUN PowerPoint on Dais Training 1</h4>
            <iframe src="https://drive.google.com/a/pacificmun.com/file/d/0B4yNSAwSzucseUxIeE1qanBiZ2s/preview" width="100%" height="450em"></iframe>
            <h4 class="resourcetitle2">To download the <b>EDUMUN PowerPoint on Dais Training 1</b>, please click <a href="Files/Dais-Training-1.pptx" download="EDUMUN2015daistraining1.pptx">here</a></h4>
       
            <h4 class="resourcetitle1">EDUMUN PowerPoint on Dais Training 2</h4>

            <iframe src="https://drive.google.com/a/pacificmun.com/file/d/0B4yNSAwSzucsR2drQkdSYjUwOW8/preview" width="100%" height="450em"></iframe>
            <h4 class="resourcetitle2">To download the <b>EDUMUN PowerPoint on Dais Training 2</b>, please click <a href="Files/Dais-Training-2.pptx" download="EDUMUN2015daistraining2.pptx">here</a></h4>
            
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