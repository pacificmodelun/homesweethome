<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN 2016- Registration</title>

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
				<h1>Registration</h1>
				
				<div>
                    <p>Thank you for your interest in PACMUN 2016! Registration is now live. To register for the conference, the process must be initiated by an advisor or head delegate by filling out the <a target="_blank" href="https://form.jotform.com/61771799502162">delegation registration</a>. After the <a target="_blank" href="https://form.jotform.com/61771799502162">delegation registration</a>, the advisor/head delegate will receive an email notifying them that their delegates can now register. All delegates must register individually by filling out the <a target="_blank" href="https://form.jotform.com/61771660183154">delegate registration</a> on our website. </p>
                    
<p>During <a target="_blank" href="https://form.jotform.com/61771799502162">delegation registration</a>, the advisor/head delegate will be prompted to select a “delegate registration deadline” on the “Select your delegate registration deadline” page. This deadline is the date in which all delegate registrations must be completed and submitted to PACMUN. The delegation will then receive an invoice within 24 hours of the selected date and they must provide payment within 10 days to retain the spots that their delegates have received. The deadline that is selected will determine the amount charged per delegate. If the deadline that is selected is on or before September 16, the delegation will be charged $100 per delegate; if the deadline that is selected is on or before November 4th, the delegation will be charged $105 per delegate; if the deadline that is selected after November 4th, the delegation will be charged $110 per delegate.</p>

<p>Please view the step-by-step registration for an in-depth look at registering for PACMUN. We hope to see you at the conference!</p>

            
                    <button class="accordion titlethin" style="margin-top: 1em;">Step by Step Registration Instructions</button>
                    <div class="panel">
        
                    </div>   
                     
                    
                    
                    <table style="width: 100%">
                    
<tr>
    <td class="columnflow nospace"><a target="_blank" href="https://form.jotform.com/61771799502162">
        <img class="nospace" style="width: 50%;" src="Photos/registerdelegation.png"></a></td>
    <td class="columnflow nospace"><a target="_blank" href="https://form.jotform.com/61771660183154">
        <img class="nospace" style="width: 50%;" src="Photos/registerdelegate.png"></a></td></tr>                         

                    </table>
                    <button class="accordion titlethin" style="margin-top: 1em;">Pricing</button>
                    <div class="panel">
        <div class="center" style="width: 80%">
<table style="margin-left: auto; margin-right: auto;">
<tr>
<td width=""><p>Early Registration: August 29th &#8211; September 16</p></td>
<td width=""><p>$100 (per delegate)</p></td>
</tr>
<tr>
<td width=""><p>Regular Registration: September 17 &#8211; November 4</p></td>
<td width=""><p>$105 (per delegate)</p></td>
</tr>
<tr>
<td width=""><p>Late Registration: November 5 &#8211; Conference Capacity</p></td>
<td width=""><p>$110 (per delegate)</p></td>
</tr>
<tr>
<td width=""><p>Additional Room Nights</p></td>
<td width=""><p>$50 (per delegate)</p></td>
</tr>
<tr>
<td width=""><p>Delegation Fee</p></td>
<td width=""><p>$200 (per delegation)</p></td>
</tr>
</table>
        </div>
                    </div>
                    
                    <button class="accordion titlethin" style="">Room Requests</button>
                    <div class="panel">
        
                    </div>  
                    
                    <button class="accordion titlethin" style="">Financial Aid</button>
                    <div class="panel">
        
                    </div>
                    
                    <button class="accordion titlethin" style="">Assignments</button>
                    <div class="panel">
        
                    </div>  
                    
                    <button class="accordion titlethin" style="">Delegate Waivers</button>
                    <div class="panel">
       
                    </div> 
<p>To assist delegates in making country and committee requests, our country matrix can be viewed on the <a href="committees.php">committees page</a>.</p>            
<p>Our full technology, rooming, and refund policies can be found <a href="conference-policies.php">here</a>.</p>
<p>If you have any questions about our fees or policies, please email <em>sg@pacificmun.com.</em></p>
					</div>
        </div>
    </div>
        <!--code for a line break: <header class="row-fluid"></header>-->
                                               
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