
<!DOCTYPE html>
<html>
<title>Student Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Asyraf/uvrs/admin/w3.css">
<link rel="stylesheet" href="/Asyraf/uvrs/admin/w3-theme-black.css">
<link rel="stylesheet" href="/Asyraf/uvrs/admin/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
.w3-navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
}

body {
	background-image: url('../images/background.png');
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-theme w3-top w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="/Asyraf/uvrs/admin/index.php" class="w3-theme-l1 w3-large"><i class="fa fa-home"></i></a></li>
    <li class="w3-hide-small"><a href="/Asyraf/uvrs/admin/about.php" class="w3-hover-white">About</a></li>
    <li class="w3-hide-small"><a href="/Asyraf/uvrs/admin/register/registerstaff.php" class="w3-hover-white">Registration</a></li>
    <li class="w3-hide-small"><a href="searchstaff.php" class="w3-hover-white">Search Info</a></li>
    <li class="w3-hide-small"><a href="/Asyraf/uvrs/admin/report/staffpiechart.php" class="w3-hover-white">Report</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="/Asyraf/uvrs/admin/faq.php" class="w3-hover-white">FAQs</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="/Asyraf/uvrs/admin/contact.php" class="w3-hover-white">Contact Us</a></li>
    <li style = "float:right" class="w3-hide-medium w3-hide-small"><a href="/Asyraf/uvrs/admin/logout.php" class="w3-hover-red">Logout</a></li>
  </ul>
</div>

<!--Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <a href="searchstaff.php" class="w3-hover-black">Staff Information</a>
  <a href="searchstudent.php" class="w3-hover-black">Student Information</a>
  <a href="searchuser.php" class="w3-hover-black">System User Information</a>

</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->

<div class="w3-main" style="margin-left:250px;width:1000px;background-color:rgba(255, 255, 255,0.6)")">

  <div class="w3-row w3-padding-64" style = "margin-left:100px"	>
      <h1 class="w3-text-teal">Searching Information</h1>


    <div class="w3-twothird w3-contain">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Filter for usernames.." id="myInput" onkeyup="myFunction()">
    <table class="w3-table-all w3-margin-top" id="myTable">
    <tr>
      <th>Name</th>
      <th>Matric Number</th>
	    <th>Phone Number</th>
	    <th></th>
    </tr>
      <?php
          mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
          mysql_select_db("registration") or die(mysql_error());

      		$query = $_POST['search'];
      		$name ="";
      		$matric_no = "";
      		$phone_no = "";

          echo "
              <script type=\"text/javascript\">
              function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById('myInput');
                filter = input.value.toUpperCase();
                table = document.getElementById('myTable');
                tr = table.getElementsByTagName('tr');
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName('td')[0];
                  if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = '';
                    } else {
                      tr[i].style.display = 'none';
                    }
                  }
                }
              }
              </script>
          ";

          $student_results = mysql_query("SELECT * FROM student
      					               WHERE (`matric_no` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());

      			$min_length = 3;
      			if(strlen($query) >= $min_length)
      			{
      				$query = htmlspecialchars($query);
      				$query = mysql_real_escape_string($query);

      					if(mysql_num_rows($student_results)> 0)
      					{
      						while($results = mysql_fetch_array($student_results))
      						{
      							$name = $results['name'];
      							$matric_no = $results['matric_no'];
      							$phone_no = $results['phone_number'];
                    echo "<tr><td>".$name."</td><td>".$matric_no."</td><td>".$phone_no."</td><td>
                      <form action = 'searchresult.php' method = 'post'>
                      <button class='w3-btn w3-blue-grey' type = 'submit' value =".$matric_no." name = 'search'>Details</button>
                      </form></td></tr>";
      						}
      					}
      					else
      					{
      							$name = "No Result Found";
      							$matric_no = "No Result Found";
      							$phone_no = "No Result Found";
                    echo "<tr><td>".$name."</td><td>".$matric_no."</td><td>".$phone_no."</td><td>
                      <form action = 'searchresult.php' method = 'post'>
                      <button class='w3-btn w3-blue-grey' type = 'submit' value =".$matric_no." name = 'search'>Details</button>
                      </form></td></tr>";
      					}
      				}
      ?>
  </table>
</div>
  </div>


  <!-- Footer -->
  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32" style = "margin-top:20%" >
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

function element(){
document.getElementById("name").innerHTML = "Name";
document.getElementById("faculty").innerHTML = "Faculty";
document.getElementById("phone_no").innerHTML = "Phone Number";
document.getElementById("matric_no").innerHTML = "Matric Number";
document.getElementById("resident").innerHTML = "Residential College";



}
}
</script>

</body>
</html>
