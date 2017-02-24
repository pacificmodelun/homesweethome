<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>NATO</title>
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
                <div class="committeehead" style="background-image: url('Headers/NATOheader.jpg')">
                    <h1 class="committeetitle">NATO</h1>
                </div>
            </div>
        </div>
        <div class="container" style="background-color:#FFF;color: #1792A7;padding: 20px;">
            
            <div class="description"><p>The North Atlantic Treaty Organization is a regional security organization comprised of 28 member states whose stated purpose is to “safeguard the freedom and security of its members through political and military means” (NATO).  NATO is unique in that it has the ability to enforce its solutions rather than just propose them, a power it has exercised in instances such as the economic recovery of former Soviet states and the imposition of sanctions during the Bosnian War. Furthermore, although NATO was formed in 1949 between the United States and United Kingdom to respond to the growing Soviet threat, NATO has since cultivated alliances with other North Atlantic nations.  Currently, NATO’s primary areas of focus include crisis-management in areas of conflict, nuclear arms control, counterterrorism, as well as other mechanisms for collective defense of NATO countries.</p>
            <p>Position Papers are mandatory, and must be turned in to the dais by 11:59PM on Nov 6, 2016. The dais’ e-mail address is 
                <a href="mailto:nato@pacificmun.com" target="_top">nato@pacificmun.com</a>. Late position papers will not be considered for an award unless an extension has been requested by the delegate and approved by the dais at least 24 hours in advance.</p>
            <p>Further questions or inquiries can be directed to the dais at
                <a href="mailto:nato@pacificmun.com" target="_top">nato@pacificmun.com</a>.</p></div>
            <div class="topics">
            <h4> Topic 1: <b>Cybersecurity</b></h4>
            <h4> Topic 2: <b>Responding to Terrorist Threats in the Middle East</b></h4>
            </div>
            <h4 class="inversetitlesmall"><a href="BGs/pacmun2016NATObg.pdf" download="pacmun2016NATObg.pdf" style="color: white;">Download the Background Guide by clicking here</a></h4>
            <div>
            <h3 style="padding: 0; margin: 0; margin-top: 1em;">Staff</h3>
    <table style="margin-left: auto; margin-right: auto; width: 100%">
        <tr><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/JasmineSun.jpg">
        <div>
            <div class="sshort">
                <h2>Jasmine Sun</h2>
                <h5>Director</h5>
                <p>Jasmine Sun is currently a senior attending Interlake High School and will be serving as the Director of NATO at PACMUN 2016. Outside of MUN, she is the co-captain of Interlake’s policy debate team and consequently spends too time debating her friends about international security, critical race theory, and whether there’s time to grab coffee (always yes). Her other interests include volunteering at local museums and watching documentaries. Jasmine anticipates a successful conference full of lively and thoughtful debate!</p>
            </div>
        </div>
    </div>
   </td> <td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/AnishaAzad.jpg">    
        <div>
            <div class="sshort">
                <h2>Anisha Azad</h2>
                <h5>Chair</h5>
                <p>Anisha Azad is currently a senior at Woodinville high school in Woodinville, Washington. She is ecstatic to be chair of NATO for PACMUN 2016. Other than MUN, Anisha is also the president of of the WHS Debate Club and plays the flute in the WHS band. Additionally, Anisha is a student athlete and throws shotput and discus for the WHS track team. Anisha enjoys having new experiences with her friends and listening to Drake. She is looking forward to exciting debate that she knows PACMUN NATO will bring!</p>
            </div>
        </div>
    </div>
    </td><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/BellaHedly.jpg">    
        <div>
            <div class="short">
                <h2>Isabella Hedly</h2>
                <h5>Assistant Director</h5>
                <p>Isabella Hedly is currently a sophomore in the Cambridge Program at Juanita High School. She is in her second year of MUN but this is her first time staffing a conference. When she is not living the MUN life or running on zero sleep (thanks to school) she enjoys running for her school cross country team and training for a half marathon, writing novels, rowing in Sammamish, playing with her dogs, running her bakery (she is happy to share sweets with both the delegates and staff members), and traveling. As long as she has enough sleep to enjoy the conference, Isabella looks forward to a fun and productive few days as she gets to know the delegates of NATO.</p>
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