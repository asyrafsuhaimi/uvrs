
<!DOCTYPE html>
<html>
<title>FAQs</title>
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
<div class="w3-main" style="margin-left:150px;margin-top:50px;width:1100px;background-color:rgba(255, 255, 255,0.6)")">

<br>

<div class="w3-animate-opacity w3-panel w3-blue w3-leftbar w3-border-light-blue">
  <h5 class = "w3-text-white">FAQs</h5>
  <p class ="w3-text-white">Here are the questions frequently asked. If there are any other questions
    e-mail us or head to contact us tab and send suggestions</p>
</div>

  <div class="w3-row w3-animate-opacity">
    <div class="w3-twothird w3-container">
      <h5 class="w3-text-teal">1. How To Register Student Or Staff Information</h5>
      <p><h6>Hover your cursor to Registration tab and click it. A form will show up upon clicking the Registration tab
      and then staff and student registration can be done at there.<h6></p>
    </div>
  </div>

  <div class="w3-row w3-animate-opacity">
    <div class="w3-twothird w3-container">
      <h5 class="w3-text-teal">2. How To Search Staff And Student Information</h5>
      <p><h6>Hover your cursor to Search Info tab and click it. A search bar will show up upon clicking the Search Info tab
      and then staff and student information can be search at this tab.<h6></p>
    </div>
  </div>

  <div class="w3-row w3-animate-opacity">
    <div class="w3-twothird w3-container">
      <h5 class="w3-text-teal">3. How to edit and delete Staff And Student Information</h5>
      <p><h6>Delete and updating student and staff information can only be done when the information of the student
        or staff have been searched. After searching the required information, a button of deleting and updating the information
        will be shown at the bottom of the information searched<h6></p>

        <p><h6 style = "font-style:oblique" class = "w3-hover-red">Please take note that deleting the information are only allow
        to the administrator of this system.<h6></p>
      </div>

    <div class="w3-row w3-animate-opacity">
      <div class="w3-twothird w3-container">
        <h5 class="w3-text-teal">4. How to view report about staff and student registered in this system.</h5>
        <p><h6>Hover your cursor to Report tab and click it. A report will show up upon clicking the Report tab
        and then information and facts about staff and student that had been registered can be view tab.<h6></p>

        <p><h6 style = "font-style:oblique" class = "w3-hover-indigo">Please take note that Report tab feature are only existed
        to the administrator of this system.<h6></p>
      </div>
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
