<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>HCC</title>
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
        <div class="containerNOT">
            <div class="row">
                <div class="committeehead" style="background-image: url('Headers/HCCheader.jpg')">
                    <h1 class="committeetitle">HCC</h1>

                </div>
            </div>
        </div>
        <div class="container" style="background-color:#FFF;color: #1792A7;padding: 20px;">
            
            <div class="description"><p>From the Suez Canal Crisis to the French Revolution, the Historical Crisis Committee (HCC) is committed to resolving and reshaping the issues that our ancestors faced. The HCC is a crisis committee, meaning that ROP will be different than in regular committees. Delegates will have to adapt and respond to constantly changing environments and make the best out of every situation given to them. Instead of writing resolutions, delegates will write directives; short operative clauses that describe what delegates want to accomplish. HCC is a dynamic and fast paced committee with constantly changing issues. </p>
            
            <p>Further questions or inquiries can be directed to the dais at 
                <a href="mailto:hcc@pacificmun.com" target="_top">hcc@pacificmun.com</a>.</p></div>
            <div class="topics">
            <h4> Topic: <b>The Battle for Gran Colombia</b></h4>
            </div>
            <h4 class="inversetitlesmall"><a href="BGs/pacmun2016HCCbg.pdf" download="pacmun2016HCCbg.pdf" style="color: white;">Download the Background Guide by clicking here</a></h4>
            <div>
            <h3 style="padding: 0; margin: 0; margin-top: 1em;">Staff</h3>
    <table style="margin-left: auto; margin-right: auto; width: 100%">
        <tr><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/EmmaPyron.jpg">
        <div>
            <div class="sshort">
                <h2>Emma Pyron</h2>
                <h5>Director</h5>
                <p>Emma is a Senior at the Center School but spends her time doing full time Running Start at Bellevue College. This is Emma’s sixth Model UN conference and her second time staffing. She loves the UN and even went through Geneva on a family vacation just so she could see the UN headquarters and go to the gift shop. Outside of Model UN Emma is a lifeguard and swim instructor and loves spending time in the water. Emma is very excited to be the Director of the Historical Crisis Committee and is looking forward to meeting everyone in committee.</p>
            </div>
        </div>
    </div>
   </td> <td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/ScottMusselwhite.jpg">    
        <div>
            <div class="sshort">
                <h2>Scott Musselwhite</h2>
                <h5>Chair</h5>
                <p>Scott Musselwhite is a Senior at Bainbridge High School and is the Historical Crisis Committee Chair of PACMUN 2016. PACMUN 2016 will be Scott’s second Pacific Model UN conference and seventh overall conference. Many of these conferences he participated in the chaotic, shenanigan filled gatherings known as “Joint Crisis Committees”. Outside of MUN he spends his time rowing for the Bainbridge Island Rowing Club, hiking, and honing his skills as an extremely mediocre golfer. Scott is a dedicated member of Bainbridge MUN and looks forward to staffing this year. </p>
            </div>
        </div>
    </div>
    </td><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/AlanReyes.jpg">    
        <div>
            <div class="short">
                <h2>Alan Reyes</h2>
                <h5>Assistant Director</h5>
                <p>Alan Reyes is a Senior at Inglemoor High School. He will be the Assistant Director of HCC for PACMUN 2016. He  has been going to PACMUN since its inauguration in 2014, and is proud to be the a member of staff for this year’s conference. Outside of MUN, Alan enjoys playing piano and viola, practicing and competing in Inglemoor’s Quiz Bowl team, playing video games, and learning random facts about history. Did you know three people declared themselves Pope and excommunicated each other?  Alan is very excited to work with all the delegates at PACMUN 2016. </p>
            </div>
        </div>
    </div>
   </td>
        </tr>
    </table>

            </div>
            <div class="containerNOT">
        
            </div>
        </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>
                                                            
    <footer>
        <?php
include '../footer.php';
?>
        <div class="containerNOT">
            <div class="row">
            </div>
			</div>
    </footer>
    
</body>

</html>