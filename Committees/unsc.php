<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>UNSC</title>
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
                <div class="committeehead" style="background-image: url('Headers/UNSCheader.jpg')">
                    <h1 class="committeetitle">UNSC</h1>
                </div>
            </div>
        </div>
        <div class="container" style="background-color:#FFF;color: #1792A7;padding: 20px;">
            
            <div class="description"><p>The United Nations Security Council (UNSC) is the most powerful and influential committee within the main UN organs. It is tasked with the maintenance of international peace and security, with accordance with the principles and purposes of the United Nations. As a result, the UNSC is the only UN body with the ability to enforce sanctions and deploy collective military action. The UNSC was established in 1945 by five of the most influential nations. The UNSC is one of the six principal bodies, and consists of fifteen member states. The five influential nations hold permanent positions on the council possessing veto abilities, while other states serve temporary terms. The permanent members are China, France, Russia, the United Kingdom, and the United States. The remaining ten members are representative of various international regions, and rotate every two years. In the past, UNSC has initiated various peacekeeping missions and authorized sanctions in regards towards international security. In the Security Council, all members are required to carry out solutions represented within its resolutions.</p>
            <p>Position Papers are mandatory, and must be turned in to the dais by 11:59PM on Nov 6, 2016. The dais’ e-mail address is 
                <a href="mailto:unsc@pacificmun.com" target="_top">unsc@pacificmun.com</a>. Late position papers will not be considered for an award unless an extension has been requested by the delegate and approved by the dais at least 24 hours in advance.</p>
            <p>Further questions or inquiries can be directed to the dais at 
                <a href="mailto:unsc@pacificmun.com" target="_top">unsc@pacificmun.com</a>.</p></div>
            <div class="topics">
            <h4> Topic 1: <b>Russia-Ukraine Conflict</b></h4>
            <h4> Topic 2: <b>The Situation in the CAR</b></h4>
            </div>
            <h4 class="inversetitlesmall"><a href="BGs/pacmun2016UNSCbg.pdf" download="pacmun2016UNSCbg.pdf" style="color: white;">Download the Background Guide by clicking here</a></h4>
            <div>
            <h3 style="padding: 0; margin: 0; margin-top: 1em;">Staff</h3>
    <table style="margin-left: auto; margin-right: auto; width: 100%">
        <tr><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/ConnorCheney.jpg">
        <div>
            <div class="sshort">
                <h2>Connor Cheney</h2>
                <h5>Director</h5>
                <p>Connor is a junior at the Ocean Research College Academy (ORCA), and has been involved in MUN since freshman year. He is extremely excited to be this year's UNSC Director. While not debating pressing topics, Connor enjoys coding, biking, and volunteering at various organizations. PACMUN 2016 will be Connor’s first staffing opportunity, and hopes that he can carry over his MUN experience to ensure that the UNSC provides an amazing experience for all delegates.</p>
            </div>
        </div>
    </div>
   </td> <td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/BryceLane.jpg">    
        <div>
            <div class="sshort">
                <h2>Bryce Lane</h2>
                <h5>Chair</h5>
                <p>Bryce Lane is honored to be the Chair for UNSC in PACMUN 2016. This will be Bryce’s 5th conference.  Besides Model UN, Bryce is also very active on his school's Swim Team, Cross Country, Track and Field, and Band. Bryce is a Junior at Inglemoor High and has been in Model UN for two years. Bryce is looking forward to see all of the delegates grow and become more experienced.</p>
            </div>
        </div>
    </div>
    </td><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/SamPederslie.jpg">    
        <div>
            <div class="sshort">
                <h2>Samantha Pederslie</h2>
                <h5>Assistant Director</h5>
                <p>Samantha is a senior at Woodinville High School, and she will be this year’s Assistant Director of the United Nations Security Council. Besides MUN, she also likes Hiking Club and Debate. Samantha is pretty much still a child and likes to sew dresses, play GameCube, and have lengthy naps. This will be her first time staffing and she is excited to see what delegates will have to say about the topics!</p>
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