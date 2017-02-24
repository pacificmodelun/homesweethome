<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>ECOSOC</title>
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
                <div class="committeehead" style="background-image: url('Headers/ECOSOCheader.jpg');">
                    <h1 class="committeetitle">ECOSOC</h1>
                </div>
            </div>
        </div>
        <div class="container" style="background-color:#FFF;color: #1792A7;padding: 20px;">
            
            <div class="description"><p>As one of the six major United Nations bodies established by the 1945 Charter of the UN, The United Nations Economic and Social Council (ECOSOC) focuses on improving the three key elements of sustainable development; economic, social and environmental progress. With the largest budget of any UN body, ECOSOC works to coordinate and achieve international efforts and encourage innovative thinking. Relying on input from over 2,500 non-governmental organizations (NGOs), the UN General Assembly elects 54 members from around the world to serve three year terms on the council to provide a unique perspective on humanitarian issues. As the council is so large, it has created many sub-committees to give the program specific topics to focus on, such as the Commission on Science and Technology for Development (CSTD), Commission on the Status of Women and the UN Human Rights Council. Powers of this organization include the organization of forums discussing its areas of interest and provide policy suggestions to countries or UN entities.</p>
            <p>Position Papers are mandatory, and must be turned in to the dais by 11:59PM on Nov 6, 2016. The dais’ e-mail address is 
                <a href="mailto:ecosoc@pacificmun.com" target="_top">ecosoc@pacificmun.com</a>. Late position papers will not be considered for an award unless an extension has been requested by the delegate and approved by the dais at least 24 hours in advance.</p>
            <p>Further questions or inquiries can be directed to the dais at 
                <a href="mailto:ecosoc@pacificmun.com" target="_top">ecosoc@pacificmun.com</a>.</p>
            </div>
            <div class="topics">
            <h4> Topic 1: <b>Implementing Renewable Power Sources</b></h4>
            <h4> Topic 2: <b>Assistance with Education in Developing Countries</b></h4>
            </div>
            <h4 class="inversetitlesmall"><a href="BGs/pacmun2016ECOSOCbg.pdf" download="pacmun2016ECOSOCbg.pdf" style="color: white;">Download the Background Guide by clicking here</a></h4>
            <div>
            <h3 style="padding: 0; margin: 0; margin-top: 1em;">Staff</h3>
    <table style="margin-left: auto; margin-right: auto; width: 100%">
        <tr><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/MatthewMartin.jpg">
        <div>
            <div class="short">
                <h2>Matthew Martin</h2>
                <h5>Director</h5>
                <p>Matthew Martin is a sophomore at Sky Valley Education Center. This is his second year in Model UN, and his favorite part about it is writing resolutions. A resolution represents the product of a committee working together to accomplish a goal addressing world issues, which is why it is his favorite part. Outside of Model UN, he enjoys reading, Tae Kwon Do, boating with his family, and playing video games. PACMUN was Matthew’s the first MUN conference. Now, a year later, he has the opportunity to act as the Director of ECOSOC.  Matthew is eager to work with delegates providing the support to create a memorable experience.</p>
            </div>
        </div>
    </div>
   </td> <td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/JasonSnow.jpg">    
        <div>
            <div class="sshort">
                <h2>Jason Snow</h2>
                <h5>Chair</h5>
                <p>Jason is a Junior at Kentwood High School. He has been in MUN for 3 years, and enjoys going to conferences. He is excited to serve as Chair of ECOSOC. He helps run his school’s MUN club, and has successfully banned the “Cat’s vs. Dog” mock debate from his club. Outside of school, he enjoys reading, programming, and keeping up with current world issues. </p>
            </div>
        </div>
    </div>
    </td><td class="st3">
    <div class="staff thumb">
        <img src="../StaffHeadshots/StellaEsenstenCicon.jpg">    
        <div>
            <div class="short">
                <h2>Stella Esensten-Cicon</h2>
                <h5>Assistant Director</h5>
                <p>Stella Esensten-Cicon is a senior at Seattle Academy of Arts and Sciences, and she is extremely excited to be part of the PACMUN team. She loves all things government, being a part of her schools MUN delegation, Youth Legislature delegation, and Mock Trial team, and a numerous other government related and political clubs. She is the student lead for five different clubs. When she isn’t participating in these actives, she is volunteering at the Seattle Humane Society or spending time with friends.</p>
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