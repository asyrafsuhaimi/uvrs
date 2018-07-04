
<!DOCTYPE html>
<html>
<title>Contact Us</title>
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
<div class="w3-main" style="margin-top:50px;margin-left:150px;width:1100px;background-color:rgba(255, 255, 255,0.6)")">



<br>
<div class="w3-animate-opacity w3-panel w3-blue w3-leftbar w3-border-light-blue">
  <h3 class = "w3-text-white">HelpDesk</h3>
  <p class ="w3-text-white">For More Information, Contact us:</p>
</div>


<div class = "w3-row">
    <div class = "w3-col s4 w3-container">
      <div class = "w3-animate-opacity w3-card-4 w3-white ">
        <header class = "w3-container w3-teal">
          <h3 class = "w3-text-white">Contact Info</h3>
        </header>
          <div class = "w3-container">
            <p>Pejabat Keselamatan</p>
            <p>Universiti Teknikal Malaysia Melaka,</p>
            <p>Hang Tuah Jaya</p>
            <p>Durian Tunggal, 76100</p>
            <p>Melaka, Malaysia</p>
            <p>Tel: 06-3316362</p>
            <p>Fax: 06-3316369</p>
          </div>
      </div>
    </div>



    <div class = "w3-col s6 w3-container">
      <div class = "w3-animate-opacity w3-card-4 w3-white " style = "width:500px;height:330px">
        <header class = "w3-container w3-teal">
          <h3 class = "w3-text-white">Suggestion</h3>
        </header>
          <div class = "w3-container">
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-white w3-hover-green" style = "margin-top:90px;margin-left:30px"><h4>+Click Here To Submit Ideas And Suggestion</h4></>
          </div>
      </div>

    </div>
</div>

<!-- Modal -->
<div class="w3-container">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;
        </span>
      </div>

      <form action="" class="w3-container w3-text-teal w3-margin">
      <h2 class="w3-center">Suggestion</h2>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
          </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
          </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
          </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
          </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
          </div>
      </div>

          <button class="w3-btn-block w3-section w3-teal w3-ripple w3-padding">Send</button>

      </form>



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
