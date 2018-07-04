
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$nama = $_POST['name'];
	$no_staff = $_POST['staff_no'];
	$no_telefon = $_POST['phone_no'];
	$kawasan = $_POST['location'];
	$jawatan = $_POST['position'];
	$lesen = $_POST['license_no'];
	$sah_lesen = $_POST['license_valid'];
	$alamat = $_POST['address'];
	$no_pendaftaran = $_POST['vehicle_no'];
	$jenis_kenderaan = $_POST['vehicle_type'];
	$pemilikan_kenderaan = $_POST['vehicle_ownership'];
	$cukai = $_POST['road_tax'];
	$feestaff = 0;
  $feetotal = 0;


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	$query1 = "select * from payment where payment_category = 'staff'";
	$query2 = "select * from payment where payment_category = 'total'";

	$result1 = $conn->query( $query1);
	$result2 = $conn->query( $query2);


	$num_results1 = $result1->num_rows;
	$num_results2 = $result2->num_rows;


	if( ($num_results1)||($num_results2)> 0)
	{
		while( $row = $result1->fetch_assoc() ){
            extract($row);
			$feestaff = $row['fee_collected']+2;
		}

    while( $row = $result2->fetch_assoc() ){
            extract($row);
			$feetotal = $row['fee_collected']+2;
		}

	}


	$sql = "INSERT INTO staff (staff_no, name, phone_no, location, position, address) VALUES ('$no_staff', '$nama', '$no_telefon', '$kawasan', '$jawatan', '$alamat')";
	$sql1 = "INSERT INTO vehicle_staff(staff_no, vehicle_no, road_tax, vehicle_ownership, vehicle_type) VALUES ('$no_staff','$no_pendaftaran', '$cukai', '$pemilikan_kenderaan', '$jenis_kenderaan')";
	$sql2 = "INSERT INTO staff_registration(staff_no, vehicle_no) VALUES ('$no_staff', '$no_pendaftaran')";
	$sql3 = "INSERT INTO staff_license(staff_no, license_no, license_valid) VALUES ('$no_staff', '$lesen', '$sah_lesen')";
	$sql4 = "UPDATE payment SET  fee_collected = '$feestaff' WHERE payment_category = 'staff'";
	$sql5 = "UPDATE payment SET  fee_collected = '$feetotal' WHERE payment_category = 'total'";




	if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)&&mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3)&&mysqli_query($conn, $sql4)&&mysqli_query($conn, $sql5))
	{
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Created")';
		echo '</script>';
		echo "<script language=javascript>window.location='registerstaff.php';</script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
