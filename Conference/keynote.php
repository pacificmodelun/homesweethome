<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Keynote</title>
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
        
        <h1>Keynote Speaker</h1>
        <h5 style="font-size: 7em; text-align: center;">Anu Garg</h5>
            <img src="../Photos/anugarg.jpg" style="width: 40%; margin-top: 0;" class="center">
<div class="center" style="width: 95%;">

<p>Mr. Anu Garg is the founder of <a href="http://wordsmith.org/">Wordsmith.org</a>, an online community of word-lovers in 175 countries. He has authored three bestselling
    books on words. He speaks about words and languages internationally. </p>

<p>Mr. Garg grew up in rural India. He learned the English language and came to the US to study computer science in graduate school. He worked in a number of corporations including AT&T Labs. Eventually he gave up his career in computing for the love of words. Now he focuses on spreading the magic of words.</p>

<p>He has been profiled in Smithsonian, The New York Times, Wall Street Journal, USA Today, Guardian, among others.</p>
</div>
            
        </div>
        
                  
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
                                                        
    <footer>
        <div class="containerNOT">
            <div class="row">
				
            </div> </div>
    <?php
include '../footer.php';
?>
    </footer>
    
</body>

</html>