<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2017- Committees</title>
  <?php
include 'headRoot.php';
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
include 'navRoot.php';
?>
    <?php
include 'sliders.php';
?>
    
    <div class="backgroundcontainer">
        <div class="container" style="background-color:#FFF;color:#1792A7;">
            <h1>Committees</h1>
            
            <p>PACMUN is proud to offer 14 committees that address a wide array of topics. Representation in these committees is designed to mirror real-world representation in the United Nations, while also allowing for constructive debate.
            </p>
            <p>
Background guides will be released October 1st, 2016. Position papers for all committees are due by 11:59PM on Nov 6, 2016 unless previous arrangements have been made. Please send all position papers to the designated committee emails (e.g. ga@pacificmun.com)</p>
            
            <div id="committeesbar">
                <button class="accordion titlethin">Principal Bodies</button>
<div class="panel titlethin">
  <ul>
        <li><a href="Committees/ga.php" target="_blank">General Assembly</a></li>
        <li><a href="Committees/unsc.php" target="_blank">United Nations Security Council</a></li>
        <li><a href="Committees/icj.php" target="_blank">International Court of Justice</a></li>
        <li><a href="Committees/ecosoc.php" target="_blank">Economic and Social Council</a></li>
    </ul>
</div>

<button class="accordion titlethin">Economic and Social Committees</button>
<div class="panel titlethin">
    <ul>
        <li><a href="Committees/undp.php" target="_blank">United Nations Development Programme</a></li>
        <li><a href="Committees/g20.php" target="_blank">Group of Twenty</a></li>
        <li><a href="Committees/unhrc.php" target="_blank">United Nations Human Rights Council</a></li>
    </ul>
</div>

<button class="accordion titlethin">Regional Organizations</button>
<div class="panel titlethin">
  <ul>
        <li><a href="Committees/celac.php" target="_blank">Community of Latin American and Caribbean States</a></li>
        <li><a href="Committees/eu.php" target="_blank">European Union</a></li>
        <li><a href="Committees/nato.php" target="_blank">North Atlantic Treaty Organization</a></li>
        <li><a href="Committees/ussenate.php" target="_blank">United States Senate</a></li>
    </ul>
</div>
<button class="accordion titlethin">Specialized and Crisis Committees</button>
<div class="panel titlethin">
  <ul>
        <li><a href="Committees/jcc.php" target="_blank">Joint Crisis Committee</a></li>
        <li><a href="Committees/hcc.php" target="_blank">Historical Crisis Committee</a></li>
        <li><a href="Committees/iaea.php" target="_blank">International Atomic Energy Agency</a></li>
        <li><a href="Committees/unodc.php" target="_blank">United Nations Office on Drugs and Crime</a></li>
    </ul>
</div>
                </div>
            
            <div id="countrymatrix">
            <h2>Country Matrix</h2>
            <p>The Joint Crisis Committee and Historical Crisic Committee are unique in that each country position also comes with a specific role. These are listed in the matrix below. If you would like to apply for the JCC or HCC, please specify what exact position you would like in your application. The availability of these positions can be checked in the second and third sheets of the below matrix, titled “JCC” and "HCC".</p>
                <p>A green O indicates that a position is available.  A red X indicates that a position is unavailable.</p>
                <iframe src="https://docs.google.com/spreadsheets/d/1iu42CLuRUt4vj04QcH1wgymkAi81Y2cl_aRpH5pE1dM/pubhtml?widget=true&amp;headers=false" width="100%" height="480"></iframe>
                </div>
            
            <div style="clear: left;"></div>
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>
                                                            
    <footer>
        <div class="containerNOT">
            <div class="row">
			</div>
        </div>
           <?php
(include 'footer.php');
?>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
    </footer>
</body>

</html>