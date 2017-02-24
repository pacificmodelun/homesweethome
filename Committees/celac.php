<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>CELAC</title>
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
                <div class="committeehead" style="background-image: url('Headers/celacheader.jpg');">
                    <h1 class="committeetitle">CELAC</h1>
                </div>
            </div>
        </div>
        <div class="container" style="background-color:#FFF;color: #1792A7;padding: 20px;">
            <div class="description"><p>Welcome to the CELAC (Comunidad de Estados Latinoamericanos y Caribeños) committee. CELAC, also known as CLACS (Community of Latin American and Caribbean States), is a committee comprised of thirty three countries in the Latin American and Caribbean region, with the purpose of promoting regional integration and sustainable development. The committee also focuses on developing relations with other countries and multinational organizations in attempts to foster collaboration between a wide range of government bodies. Originally created in February of 2010, the first summit was held in Caracas, Venezuela, in December of 2011. Following summits are held yearly in different countries belonging to CELAC. The committee, created as an alternative to OAS (Organization of American States), expressly excludes the U.S. and Canada in order to express a uniquely Latino voice, free from U.S. and Canadian interests. CELAC boasts the world’s third largest economy, and is the world’s largest food producer.</p>
            <p>Position Papers are mandatory, and must be turned in to the dais by 11:59PM on Nov 6, 2016. The dais’ e-mail address is 
                <a href="mailto:celac@pacificmun.com" target="_top">celac@pacificmun.com</a>. Late position papers will not be considered for an award unless an extension has been requested by the delegate and approved by the dais at least 24 hours in advance.</p>
            <p>Further questions or inquiries can be directed to the dais at 
                <a href="mailto:celac@pacificmun.com" target="_top">celac@pacificmun.com</a>.</p>
            </div>
            <div class="topics">
            <h4> Topic 1: <b>Mitigation of Drug Related Crime</b></h4>
            <h4> Topic 2: <b>Adolescent Pregnancy</b></h4>
            </div>
            <h4 class="inversetitlesmall"><a href="BGs/pacmun2016CELACbg.pdf" download="pacmun2016CELACbg.pdf" style="color: white;">Download the Background Guide by clicking here</a></h4>
            <div>
            <h3 style="padding: 0; margin: 0; margin-top: 1em;">Staff</h3>
    <table style="margin-left: auto; margin-right: auto; width: 100%">
        <tr><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/EricVanWinkle.jpg">
        <div>
            <div class="short">
                <h2>Eric VanWinkle</h2>
                <h5>Director</h5>
                <p>Eric VanWinkle is serving as the director of CELAC at PACMUN 2016. Currently, Eric is a senior at Bellarmine Prep, and this will be his second time attending and first time staffing at PACMUN. He is very excited to be serving on staff and is looking forward to working to make this a memorable conference for all delegates. His main reason for participating in MUN is to develop a better understanding of international affairs and meet new people who are passionate about the topic as well. Outside of MUN, Eric enjoys serving on ASB, playing piano, learning new languages, flying, and playing basketball. He is excited to be staffing a rather newly-founded committee, and looks forward to the debate. </p>
            </div>
        </div>
    </div>
   </td> <td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/JennyKane.jpg">    
        <div>
            <div class="sshort">
                <h2>Jenny Kane</h2>
                <h5>Chair</h5>
                <p>Jenny is a senior at Interlake High School and will be serving as the Chair for CLACS. Though this is her first time staffing a conference, Jenny is incredibly excited for this committee given her love for Latin American soap operas. Outside of MUN, Jenny plays soccer and spikeball, participates in DECA, loves the earth, and considers herself a dog enthusiast. She hopes that each delegate will have a memorable experience full of diplomatic debate!</p>
            </div>
        </div>
    </div>
    </td><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/EmmaGace.jpg">    
        <div>
            <div class="sshort">
                <h2>Emma Gace</h2>
                <h5>Assistant Director</h5>
                <p>Emma Gace will be serving as your Assistant Director of CELAC at PACMUN 2016. She is currently a junior at Bainbridge High School and will be going into her third year of Model United Nations. You may have seen her participate in conferences like CAIMUN, VMUN, and PACMUN, but this is the first time she is staffing a conference. Outside of MUN she participates on her school's swim team and plays water polo year round. She is thrilled to meet you all and hear the great debates that will occur regarding such pressing topics. </p>
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