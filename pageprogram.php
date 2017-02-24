<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2017- Page Program</title>
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
<div class="container" style="background-color:#FFF;color:#1792A7;">
        <h1>Page Program</h1>

        <p>In any debate room, if you watch closely you’re likely to see a flurry of notes being rushed from one side to another. These notes, carrying ideas, requests and collaborations, are a huge part of what makes any committee successful. However, this expeditious communication could not be possible without the pages running them.</p>

<p>Pages are an integral part of making any debate flow smoothly. Helping committee members pass notes to one another, they can be found anywhere from the US Congress to the UN General Assembly. This year, PACMUN is offering the opportunity for middle and elementary school students to learn more about MUN by running notes in PACMUN committees! While running notes, you have the opportunity to observe delegates debate and familiarize yourself with the world of MUN as well as major topics in international politics.</p>


<p>If you’re interested in joining a club in high school, becoming a page is a fantastic way to experience what MUN is all about and learn more. Registration for our page program is now open, so decide which committee you want to page for and sign up. </p>

<p>We hope to see you at PACMUN 2016! </p>
    <a href="https://form.jotform.com/61771975049164"><img src="Photos/pagereg.png" class="center" style="width: 50%;"></a>
        </div>
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