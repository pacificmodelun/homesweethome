<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2017- TBA</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.jpg">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.jpg">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.jpg">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.jpg">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.jpg">
    <link rel="icon" type="image/png" href="/favicon-32x32.jpg" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.jpg" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.jpg" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.jpg" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

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
    <nav class="navbar navbar-default navbar-fixed-top shrink">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="default.php">
                    <img id="gif_logo" src="Icons/PACMUN LOGO v8.2.jpg" alt="Icons/PACMUN LOGO v8.2.jpg" height="100" width="100">
                    <img id="shrink_logo" src="Icons/PACMUN LOGO v8.2.jpg" alt="Icons/PACMUN LOGO v8.2.jpg" width="60">
                    <img id="mobile_logo" src="Icons/PACMUN LOGO v8.2.jpg" alt="Icons/PACMUN LOGO v8.2.jpg" width="60">
                </a>
            </div>
            <div id="navbar">
                <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
                </ul>
                 <ul class="nav navbar-nav primary-nav navbar-right hidden-xs hidden-sm">
                    <li class="play_sound">
                        <a class="" href="aboutpg.html">About Us</a>
                        <audio id="about" preload="true" src="/audios/journal.mp3"></audio>
                    </li>
                    <li class="play_sound">
                        <a class="" href="conference.html">Conference</a>
                        <audio id="conference" preload="true" src="/audios/program.mp3"></audio>
                    </li>
                    <li class="play_sound">
                        <a class="" href="committees.html">Committees</a>
                        <audio id="committees" preload="true" src="/audios/community.mp3"></audio>
                    </li>
                    <li class="play_sound">
                        <a class="" href="registration.html">Registration</a>
                        <audio id="registration" preload="true" src="/audios/about.mp3"></audio>
                    </li>
                    <li class="play_sound">
                        <a class="" href="resources.html">Resources</a>
                        <audio id="resources" preload="true" src="/audios/about.mp3"></audio>
                        
                        <ul><a class="" href="edumun.html">EDUMUN</a></ul>
                     </li>
                     <li class="play_sound">
                        <a class="" href="community.html">Community</a>
                        <audio id="community" preload="true" src="/audios/about.mp3"></audio>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right visible-xs-block visible-sm-block">
                    <li><a data-toggle="modal" data-target="#modal-fullscreen" data-remote="true" href="/users/new"><i class="icon-fingerprint"></i> Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="backgroundcontainer">
        <div class="container" style="background-color:#FFF;color:#1792A7;padding:50px;">
            <h4 style="margin: 10px; padding: 0; font-size: 40px;"> this page is</h4>
            <h2 style="margin: 20px; padding: 0;">To Be Announced</h2>
            <p style="font-size: 30px; text-align: center;"> Like our <a href="https://www.facebook.com/pacificMUN"><b style="color: #1792A7">FACEBOOK</b></a> page for more updates!</p>
        </div>
        
        <div class="mainimg">
        <img src="Photos/SEC%20PHOTO.png">
        </div>
        
        <!--code for a line break: <header class="row-fluid"></header>-->
    </div>
                                                            
    <footer>
        <div class="containerNOT">
            <div class="row">
				
			</div>
        </div>
        <div id="footerbar"> <img src="pacmun%20logo%20black.jpg"> <img src="pacmun%20logo%20black.jpg"> <p style="float: right;"><a>Join Us!</a></p>
        </div>
        <div class="slideOutTab first">
    <a href="http://facebook.com">Like Us on Facebook</a>
            </div>
    </footer>
    <script>
        $(function() {
    
    // This is a shortcut to bind both mouseOver and mouseOut
    $('div.slideOutTab').hover(function() {
        // Animate out when hovered, stopping all previous animations
        $(this)
            .stop(true, false)
            .animate({
                left: 0
            }, 400);
    }, function() {
        // Animate back in when not hovered, stopping all previous animations
        $(this)
            .stop(true, false)
            .animate({
                left: -107
            }, 400);
    });
    
    
});
    </script>
</body>

</html>