<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Conference Policies</title>
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
                        <td><a class="conftitle" href="../Conference/confpolicies.php">Policies</a></td>
                        <td><a class="conftitle" href="../Conference/keynote.php">Keynote Speaker</a></td>
                        
                </tr>
                </table>
            </div>
            <h1 class="inversetitle">Conference Policies</h1>
                <h4 style="color: black;"> To download a copy of our delegate waiver, please click <a href="PACMUN2016DelegateContract.pdf" download="PACMUN2016DelegateContract.pdf">here</a>.</h4>
            
            <div class="inversebody">
                <img class="policon" src="../Icons/moneyicon.png" align="right">
                <h2>Refund Policy</h2>
                <p>No refunds will be given unless the conference does not occur or the cancellation arises from medical issues, force majeure, or other circumstances arising beyond reasonable control. These cases will be reviewed on an individual basis. </p>
            </div>
            
            <div class="altinversebody">
                <img class="policon" src="../Icons/phoneicon.png" align="left">
            <h2>Technology Policy</h2>
                <p>We are excited to offer WiFi during PACMUN 2016. During all committee sessions, laptop use is permitted however cellular devices are required to be turned off. WiFi should primarily be used to enhance collaborative Resolution Paper editing among delegates and Dais members through technology such as Google Drive and encourage participatory, high level, and informed debate. If WiFi or other technology is misused during committee, the Dais will first issue a warning, and then inform the Secretariat. Use of cellphones and laptops connected to internet is permitted outside of committee sessions.</p>
            </div>
            
        <div class="inversebody">
            <img class="policon" src="../Icons/roomingicon.png" align="right">
            <h2>Rooming Policy</h2>
            <p>All rooms will be single-sex, quad occupancy, unless a special request is made to the USGs of Logistics. Please note that some students may be asked to room with students from other schools to make sure that every room is quad occupancy. If a single or a double occupancy room is required, we may ask you to levy a small fee. All of these rooming issues will be worked out on a case-by-case basis. </p>

            <p>Advisor rooms will be single occupancy, and all chaperone rooms will be double occupancy. (Update: if chaperones are staying in the designated advisor's hotel room, there will be no extra fee for the chaperones staying in the room.) </p>

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
include '../footer.php';
?>
    </footer>
    
</body>

</html>