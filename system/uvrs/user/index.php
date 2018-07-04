<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/Asyraf/uvrs/Userlogin.php';</script>";
}

 ?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="http:w3-theme-black.css">
<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
.w3-navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;

}

body {
	background-image: url('images/background.png');
}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-theme w3-top w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="index.php" class="w3-theme-l1 w3-large"><i class="fa fa-home"></i></a></li>
    <li class="w3-hide-small"><a href="about.php" class="w3-hover-white">About</a></li>
    <li class="w3-hide-small"><a href="../user/register/registerstaff.php" class="w3-hover-white">Registration</a></li>
    <li class="w3-hide-small"><a href="../user/search/searchstaff.php" class="w3-hover-white">Search Info</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="faq.php" class="w3-hover-white">FAQs</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="contact.php" class="w3-hover-white">Contact Us</a></li>
    <li style = "float:right" class="w3-hide-medium w3-hide-small"><a href="logout.php" class="w3-hover-red">Logout</a></li>
  </ul>
</div>



<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>




<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:150px;width:1100px;background-color:rgba(255, 255, 255,0.6)")">

<div class="w3-animate-opacity w3-content w3-display-container" align = "center" style = "margin-top:30px">
  <img src="images/Title.png" style="width:40%">
</div>




<div class="w3-container">
  <p><img src="images/1.jpg" class="w3-card-4" style="width:400px;height:125px"></p>
</div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h5 class="w3-text-blue">Road Safety Campaign</h5>
      <p><h7>Road Safety Campaign Is Conducted To Explain The Importance Of Using A Seatbelt
      Increase Awareness Among Motorists. The Use Of Seat Belts Can Help To Reduce A Serious Fatal Injury From Happening.<h7></p>
    </div>

    <div class="w3-twothird w3-container" style = "margin-left:60px">

      <p><h7>Here's Are 5 Facts About Seat Belts You Might Didn't Know About :<h7></p>
      <p><h7>1. Seat belts are made to only be used once. Insist that your seat belt is
        replaced after every crash – even with a low speed collision.<h7></p>
      <p><h7>2. Airbags work best if you wear your seat belt. Airbags provide supplemental protection in crashes,
        but motorists can slide under them if they’re not wearing a seat belt. <h6></7>
      <p><h7>3. For every 1% increase in the seat belt-wearing rate, 100 lives can be saved. When correctly used seat-belts
        reduce the risk of death in a crash by 61%.<h7></p>
      <p><h7>4. Unrestrained rear-seat passengers often kill front-seat occupants who are restrained. This is due to the
        fact that unrestrained passengers are often flung forward or sideward on impact.<h7></p>
    </div>
  </div>





  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32" style="margin-top:500px">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>



<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}



</script>

</body>
</html>
