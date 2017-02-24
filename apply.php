<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg">
    <title>PACMUN- Secretariat Application</title>
  <?php
include 'headRoot.php';
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
include 'navRoot.php';
?>
    <?php
include 'sliders.php';
?>
    
    <div class="backgroundcontainer">
        <div class="container" style="background-color:#FFF;color:#1792A7;">
            <h1>Apply</h1>
            
            <p>PACMUN prides itself in being a student-run organization. Throughout the year, the PACMUN Secretariat receives mentorship from the Board of Directors and learns best practices for organizing a large event, communicating with sponsors and advisers, and navigating the labyrith of payment details. PACMUN succeeds every year due to the commitment of nearly a dozen students on the Secretariat and nearly 50 students on staff. </p>

            <p> Applications for Secretary-General are due <b> December 18 </b> and applications for all other positions are due <b> January 8 </b>.  Interviews for all positions will be conducted on a rolling basis by the PACMUN Board of Directors. Please note that the Secretary-General will be hired early so that they can be present for interviews of other Secretariat members. If you have any questions about this process, please email <a href="mailto:applications@pacificmun.com">applications@pacificmun.com</a>.</p>

            <p> If you are interested in serving on the PACMUN Secretariat, please fill out the application below and email the following documents to <a href="mailto:applications@pacificmun.com">applications@pacificmun.com</a>: </p>
            <ul>
            <li> Resume </li>
            <li> Cover Letter </li>
            <li> Letter of Recommendation from Adviser </li>
            <li> Letter of Support from Parent(s) </li>
            </ul>
            

<button class="accordion titlethin">Required Document Information</button>
<div class="panel titlethin">
    <h5> Resume </h5>
    <p style= "font-size:12px;"> Standard resume formats can be found online. Normally, resumes are no longer than 1 page in length and highlight all pertinent educational and work experience </p>
</br>
     <h5> Cover Letter </h5>
    <p style= "font-size:12px;"> Your cover letter should be about 1 page in length. Please discuss your vision for PACMUN in the future and the skill set you bring to the table. Please also explain your strategy to make your vision a reality. </p>
</br>
    <h5> Letter of Recommendation from Adviser </h5>
    <p style= "font-size:12px;"> The letter of recommendation should contain any noteworthy achievements of the applicant, both inside and outside Model United Nations. The adviser should also mention whether or not they are willing to help check-in on the applicant and help enforce deadlines as issued by PACMUN.</p>
    </br>
    <h5>Letter of Support from Parent(s) </h5>
     <p style= "font-size:12px;"> The letter of support should affirm that the parent(s) of the applicant recognize the time commitment involved with being on PACMUN Secretariat. It should also affirm that parents recognize that, during the registration period, it may be necessary for Secretariat members to miss 1-2 days of school in order to fulfill their duties, especially in a time crunch.</p>
</div>

<!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://pacmun.typeform.com/to/AWpJyQ" data-text="Job Application Form" style="width:100%;height:500px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"><a href="https://www.typeform.com/examples/forms/job-application-form-template/?utm_campaign=AWpJyQ&amp;utm_source=typeform.com-5586763-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-jobapplicationform&amp;utm_term=EN" style="color: #999" target="_blank">Job application form</a>powered by Typeform</div>




                </div>
            
           
        <!--code for a line break: <header class="row-fluid"></header>-->
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