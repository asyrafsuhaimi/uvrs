<!DOCTYPE html>
<html>
<title>Report</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Asyraf/uvrs/admin/w3.css">
<link rel="stylesheet" href="/Asyraf/uvrs/admin/w3-theme-black.css">
<link rel="stylesheet" href="/Asyraf/uvrs/admin/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<head>

</head>
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
    <li class="w3-hide-small"><a href="/Asyraf/uvrs/admin/search/searchstaff.php" class="w3-hover-white">Search Info</a></li>
    <li class="w3-hide-small"><a href="staffpiechart.php" class="w3-hover-white">Report</a></li>
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
  <a href="staffpiechart.php" class="w3-hover-black">Staff Information</a>
  <a href="studentpiechart.php" class="w3-hover-black">Student Information</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>




<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px;width:1000px;background-color:rgba(255, 255, 255,0.6)"">
<br>

<?php

    //include database connection
    include '../connect.php';

    //query all records from the database
  $query = "select * from vehicle_staff where vehicle_type = 'car'";
  $query1 = "select * from vehicle_staff where vehicle_type = 'motorcycle'";
  $query2 = "select * from vehicle_staff where vehicle_type = 'van'";
  $query3 = "select * from vehicle_staff where vehicle_type = 'bus'";
	$query4 = "select * from staff where location = 'FTMK'";
	$query5 = "select * from staff where location = 'FKE'";
	$query6 = "select * from staff where location = 'Sport Center'";
	$query7 = "select * from staff where location = 'Language And Islamic Studies Center'";
	$query8 = "select * from staff";
	$query9 = "select * from student";
  $query10 = "select * from payment where payment_category = 'staff'";
  $query11 = "select * from payment where payment_category = 'student'";
  $query12 = "select * from payment where payment_category = 'total'";
  $query13 = "select * from staff where location = 'FKEKK'";
	$query14 = "select * from staff where location = 'FPTT'";
  $query15 = "select * from staff where location = 'FTK'";
  $query16 = "select * from staff where location = 'FKM'";
  $query17 = "select * from staff where location = 'FKP'";
  $query18 = "select * from staff where location = 'Chancellery'";
  $query19 = "select * from staff where location = 'Security Office'";
  $query20 = "select * from staff where location = 'Postgraduate Center'";


	$car = 0;
	$motorcycle = 0;
	$van = 0;
	$bus = 0;
	$FTMK = 0;
	$pbpi = 0;
	$FKE = 0;
  $FKEKK = 0;
  $FPTT = 0;
  $FTK = 0;
  $FKM = 0;
  $FKP = 0;
  $chancellery = 0;
  $security = 0;
  $postgraduate = 0;
	$numstaff = 0;
	$numstudent = 0;
	$sportcenter = 0;
  $feestaff = 0;
  $feestudent = 0;
  $feetotal = 0;

    //execute the query
  $result = $conn->query( $query );
	$result1 = $conn->query( $query1);
	$result2 = $conn->query( $query2);
	$result3 = $conn->query( $query3);
	$result4 = $conn->query( $query4);
	$result5 = $conn->query( $query5);
	$result6 = $conn->query( $query6);
	$result7 = $conn->query( $query7);
	$result8 = $conn->query( $query8);
	$result9 = $conn->query( $query9);
  $result10 = $conn->query( $query10);
	$result11 = $conn->query( $query11);
	$result12 = $conn->query( $query12);
	$result13 = $conn->query( $query13);
	$result14 = $conn->query( $query14);
	$result15 = $conn->query( $query15);
	$result16 = $conn->query( $query16);
	$result17 = $conn->query( $query17);
	$result18 = $conn->query( $query18);
	$result19 = $conn->query( $query19);
	$result20 = $conn->query( $query20);

    //get number of rows returned
  $num_results = $result->num_rows;
  $num_results1 = $result1->num_rows;
  $num_results2 = $result2->num_rows;
  $num_results3 = $result3->num_rows;
	$num_results4 = $result4->num_rows;
	$num_results5 = $result5->num_rows;
	$num_results6 = $result6->num_rows;
	$num_results7 = $result7->num_rows;
	$num_results8 = $result8->num_rows;
	$num_results9 = $result9->num_rows;
  $num_results10 = $result10->num_rows;
  $num_results11 = $result11->num_rows;
  $num_results12 = $result12->num_rows;
  $num_results13 = $result13->num_rows;
  $num_results14 = $result14->num_rows;
  $num_results15 = $result15->num_rows;
  $num_results16 = $result16->num_rows;
  $num_results17 = $result17->num_rows;
  $num_results18 = $result18->num_rows;
  $num_results19 = $result19->num_rows;
  $num_results20 = $result20->num_rows;

    if( ($num_results)||($num_results1)||($num_results2)||($num_results3)||($num_results4)||($num_results5)||($num_results6)||($num_results7)||($num_results8)||($num_results9) > 0){

        while( $row = $result->fetch_assoc() ){
            extract($row);
			$car = $car + 1;

        }
		while( $row = $result1->fetch_assoc() ){
            extract($row);
			$motorcycle = $motorcycle + 1;

        }
		while( $row = $result2->fetch_assoc() ){
            extract($row);
			$van = $van + 1;

        }
		while( $row = $result3->fetch_assoc() ){
            extract($row);
			$bus = $bus + 1;

        }
		while( $row = $result4->fetch_assoc() ){
            extract($row);
			$FTMK = $FTMK + 1;
		}
		while( $row = $result5->fetch_assoc() ){
            extract($row);
			$FKE = $FKE + 1;
		}
		while( $row = $result6->fetch_assoc() ){
            extract($row);
			$sportcenter = $sportcenter + 1;
		}
		while( $row = $result7->fetch_assoc() ){
            extract($row);
			$pbpi = $pbpi + 1;
		}
		while( $row = $result8->fetch_assoc() ){
            extract($row);
			$numstaff = $numstaff + 1;
		}
		while( $row = $result9->fetch_assoc() ){
            extract($row);
			$numstudent = $numstudent + 1;
		}
    while( $row = $result10->fetch_assoc() ){
            extract($row);
			$feestaff = $row['fee_collected'];
		}
    while( $row = $result11->fetch_assoc() ){
            extract($row);
			$feestudent = $row['fee_collected'];
		}
    while( $row = $result12->fetch_assoc() ){
            extract($row);
			$feetotal = $row['fee_collected'];
		}
    while( $row = $result13->fetch_assoc() ){
            extract($row);
			$FKEKK= $FKEKK + 1;
		}
    while( $row = $result14->fetch_assoc() ){
            extract($row);
			$FPTT= $FPTT + 1;
		}
    while( $row = $result15->fetch_assoc() ){
            extract($row);
			$FTK= $FTK + 1;
		}
    while( $row = $result16->fetch_assoc() ){
            extract($row);
			$FKM= $FKM + 1;
		}
    while( $row = $result17->fetch_assoc() ){
            extract($row);
			$FKP= $FKP + 1;
		}
    while( $row = $result18->fetch_assoc() ){
            extract($row);
			$chancellery= $chancellery + 1;
		}
    while( $row = $result19->fetch_assoc() ){
            extract($row);
			$security= $security + 1;
		}
    while( $row = $result18->fetch_assoc() ){
            extract($row);
			$postgraduate= $postgraduate + 1;
		}
    }
?>
  <div class="w3-row w3-padding-64">

  <div class="w3-twothird w3-container">
	 <h3 class="w3-text-black w3-center">Staff Registration Information</h3>
   	 <p><h6><?php echo "Date: " . date("Y.m.d") . "<br>";?></h6></p>
		<div class = "w3-border w3-padding w3-white w3-card-4">
			<div id="piechart_3d" style="width: 500px; height: 300px;"></div>
		</div>
	</div>
  </div>

  <div class="w3-twothird w3-container">
  <table class="w3-table-all w3-hoverable w3-card-4 ">
    <tr>
      <th>Vehicle Type</th>
      <th>Number Of Vehicle</th>
    </tr>
    <tr>
      <td>Car</td>
      <td><?php echo $car ?></td>
    </tr>
    <tr>
      <td>Motorcycle</td>
      <td><?php echo $motorcycle ?></td>
    </tr>
    <tr>
      <td>Van</td>
      <td><?php echo $van ?></td>
    </tr>
    <tr>
      <td>Bus</td>
      <td><?php echo $bus ?></td>
    </tr>
  </table>
  <br>
  <br>
</div>


  <div class="w3-row">
    <div class="w3-twothird w3-container">
		<div class = "w3-border w3-padding w3-white w3-card-4">
			<div id="location_chart" style="width: 600px; height: 400px;"></div>
		</div>
    </div>
  </div>

<div class="w3-twothird w3-container">
<br>
<br>
  <table class="w3-table-all w3-hoverable w3-card-4 ">
    <tr>
      <th>Responsibility Center</th>
      <th>Number Of Vehicle</th>
    </tr>
    <tr>
      <td>FTMK</td>
      <td><?php echo $FTMK ?></td>
    </tr>
    <tr>
      <td>FKE</td>
      <td><?php echo $FKE ?></td>
    </tr>
    <tr>
      <td>FTK</td>
      <td><?php echo $FTK ?></td>
    </tr>
    <tr>
      <td>FKEKK</td>
      <td><?php echo $FKEKK ?></td>
    </tr>
    <tr>
      <td>FKP</td>
      <td><?php echo $FKP ?></td>
    </tr>
    <tr>
      <td>FKM</td>
      <td><?php echo $FKM ?></td>
    </tr>
    <tr>
      <td>FPTT</td>
      <td><?php echo $FPTT ?></td>
    </tr>
    <tr>
      <td>Sport Center</td>
      <td><?php echo $sportcenter ?></td>
    </tr>
    <tr>
      <td>Language And Islamic Center Studies</td>
      <td><?php echo $pbpi ?></td>
    </tr>
    <tr>
      <td>Chancellery</td>
      <td><?php echo $chancellery ?></td>
    </tr>
    <tr>
      <td>Security Office</td>
      <td><?php echo $security ?></td>
    </tr>
    <tr>
      <td>Postgraduate Center</td>
      <td><?php echo $postgraduate ?></td>
    </tr>
  </table>
  <br>
  <br>
</div>
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">

		<div class = "w3-border w3-padding w3-white   w3-card-4">
			<div id="portion_chart" style="width:500px; height: 300px;"></div>
		</div>
    </div>
  </div>

<div class="w3-twothird w3-container">
  <table class="w3-table-all w3-hoverable w3-card-4 ">
    <tr>
      <th>Distribution of the number of students and staff</th>
      <th>Number Of Person</th>
    </tr>
    <tr>
      <td>Staff</td>
      <td><?php echo $numstaff ?></td>
    </tr>
    <tr>
      <td>Student</td>
      <td><?php echo $numstudent ?></td>
    </tr>
  </table>
  <br>
  <br>
</div>




<div class="w3-twothird w3-container">
  <h3 class="w3-text-black w3-center">Amount of Fee Collected in 2016</h3>
  <table class="w3-table-all w3-hoverable w3-card-4 ">
    <tr>
      <th>Registration fee collected among students and staff</th>
      <th>Fee Collected</th>
    </tr>
    <tr>
      <td>Staff</td>
      <td>RM<?php echo $feestaff ?></td>
    </tr>
    <tr>
      <td>Student</td>
      <td>RM<?php echo $feestudent ?></td>
    </tr>
    <tr>
      <td>Total</td>
      <td>RM<?php echo $feetotal ?></td>
    </tr>
  </table>
  <br>
  <br>
</div>

  <!-- Pagination -->


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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(locationChart);
google.charts.setOnLoadCallback(portionChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Vehicle Type', 'Number Of Vehicle'],
      ['Car',     <?php echo $car?>],
      ['Motorcycle', <?php echo $motorcycle?>],
      ['Van', <?php echo $van?>],
      ['Bus',<?php echo $bus?>],
    ]);

    var options = {
      title: 'Number Of Vehicle Registered in 2016',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
  }

  function locationChart() {
    var data = google.visualization.arrayToDataTable([
      ['Responsibility Center', 'Number Of Vehicle'],
      ['FTMK',     <?php echo $FTMK?>],
      ['FKE', <?php echo $FKE?>],
      ['Sport Center', <?php echo $sportcenter?>],
      ['Language And Islamic Studies Center',<?php echo $pbpi?>],
      ['FKE', <?php echo $FKEKK?>],
      ['FKM', <?php echo $FKM?>],
      ['FTK', <?php echo $FTK?>],
      ['FPTT', <?php echo $FPTT?>],
      ['FKP', <?php echo $FKP?>],
      ['Post Graduate Center', <?php echo $postgraduate?>],
      ['Security Office', <?php echo $security?>],
      ['Chancellery', <?php echo $chancellery?>],
    ]);

    var options = {
      title: 'Number Of Vehicle In Each Responsibility Center',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('location_chart'));
    chart.draw(data, options);
  }

  function portionChart() {
    var data = google.visualization.arrayToDataTable([
      ['Responsibility Center', 'Number Of Vehicle'],
      ['Staff',     <?php echo $numstaff?>],
      ['Student', <?php echo $numstudent?>],
    ]);

    var options = {
      title: 'Distribution of the number of students and staff',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('portion_chart'));
    chart.draw(data, options);
  }

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function moneyChart() {

    var data = google.visualization.arrayToDataTable([
      ['Effort', 'Amount given'],
      ['My all',     100],
    ]);

    var options = {
      pieHole: 0.5,
      pieSliceTextStyle: {
        color: 'black',
      },
      legend: 'none'
    };

    var chart = new google.visualization.PieChart(document.getElementById('money_chart'));
    chart.draw(data, options);
  }
</script>
</body>
</html>
