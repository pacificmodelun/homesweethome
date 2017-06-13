<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2017- Conference Policies</title>
  <?php
include 'headRoot.php';
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
include 'navRoot.php';
?>
    <?php
include 'sliders.php';
?>
    
    <div class="backgroundcontainer">
        <div class="container" style="background-color:#FFF;color:#1792A7;">
            <div class="confbar">
            <table id="confpages">
                <tr>
                        <td><a class="conftitle" href="Conference/venue.php">Venue</a></td>
                        <td><a class="conftitle" href="Conference/schedule.php">Schedule</a></td>
                        <td><a class="conftitle" href="conference-policies.php">Policies</a></td>
                        <td><a class="conftitle" href="Conference/keynote.php">Keynote Speaker</a></td>
                        
                </tr>
                </table>
            </div>
            <h1 class="inversetitle">Conference Policies</h1>
                <h4 style="color: black;"> To download a copy of our delegate waiver, please click <a href="Conference/PACMUN2016TermsandContract.docx" download="PACMUN2016DelegateContract.docx">here</a>.</h4>
            
            <div class="inversebody">
                <img class="policon" src="Icons/moneyicon.png" align="right">
                <h2>Refund Policy</h2>
                <p>No refunds will be given unless the conference does not occur or the cancellation arises from medical issues, force majeure, or other circumstances arising beyond reasonable control. These cases will be reviewed on an individual basis. </p>
            </div>
            
            <div class="altinversebody">
                <img class="policon" src="Icons/phoneicon.png" align="left">
            <h2>Technology Policy</h2>
                <p>During all committee sessions, cellular phones are required to be turned off or placed in silent mode. Use of cellular phones is not permitted committee session. Laptops are permitted in committee, as long as they are closed during formal debate. Internet will be provided during committee sessions. Any use of internet for social networking, viewing explicit material, or other activity unrelated to the course of debate, the Secretariat will be notified immediately. In order to share Resolution Papers among delegates and Dias members, use of USB drives is encouraged. Use of cellphones and use of laptops connected to internet will be permitted outside of committee sessions.</p>
            </div>
            
        <div class="inversebody">
            <img class="policon" src="Icons/roomingicon.png" align="right">
            <h2>Rooming Policy</h2>
            <p>All delegate rooms will be single-sex, quad occupancy rooms. For triple rooms that result from an odd number of delegates, no extra fee will be levied. </p>
            
            <p>For single and double occupancy delegate rooms, we ask that delegations either pay a fee of $150 or $75, respectively, or that they combine with members from another delegation.</p>

            <p>Advisor and chaperone rooms are $215 per room, per night, regardless of occupancy. If chaperones are staying in the designated advisor's hotel room, there will be no extra fee for the chaperones staying in the room. </p>

            <em style="color: white"><p>NOTE: It is PACMUN policy that delegates and advisors, as well as chaperones, spend the night at the venue. This is because of our midnight crisis, and we want to give delegates the full Model United Nations experience. This policy is very common among other conferences. Any questions can be directed to <a href="mailto:secretariat@pacificmun.com" target="_top" style="color: white;">secretariat@pacificmun.com</a></p></em>
        </div>
            
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>                                               
    <footer>
        <div class="containerNOT">
            <div class="row">
            </div>
			</div>
        <?php
include 'footer.php';
?>
    </footer>
    
</body>

</html>