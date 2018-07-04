
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$nama = $_POST['name'];
	$no_matrik = $_POST['matric_no'];
	$no_telefon = $_POST['phone_no'];
	$kawasan = $_POST['faculty'];
	$alamat = $_POST['address'];
	$pemohon = $_POST['applicant'];
	$kediaman = $_POST['resident'];
	$no_pendaftaran = $_POST['vehicle_no'];
	$jenis_kenderaan = $_POST['vehicle_type'];
	$cukai = $_POST['road_tax'];
	$lesen = $_POST['license_no'];
	$sah_lesen = $_POST['license_valid'];
	$pemilikan_kenderaan = $_POST['vehicle_ownership'];
	$feestudent = 0;
	$feetotal = 0;

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	$query1 = "select * from payment where payment_category = 'student'";
	$query2 = "select * from payment where payment_category = 'total'";

	$result1 = $conn->query( $query1);
	$result2 = $conn->query( $query2);


	$num_results1 = $result1->num_rows;
	$num_results2 = $result2->num_rows;


	if( ($num_results1)||($num_results2)> 0)
	{
		while( $row = $result1->fetch_assoc() ){
            extract($row);
			$feestudent = $row['fee_collected']+2;
		}

    while( $row = $result2->fetch_assoc() ){
            extract($row);
			$feetotal = $row['fee_collected']+2;
		}

	}

	$sql = "INSERT INTO student (name, matric_no, faculty, address, phone_number, applicant, resident) VALUES ('$nama', '$no_matrik', '$kawasan', '$alamat', '$no_telefon', '$pemohon', '$kediaman')";
	$sql1 = "INSERT INTO vehicle_student(matric_no, vehicle_no, vehicle_type, vehicle_ownership, road_tax) VALUES ('$no_matrik','$no_pendaftaran', '$jenis_kenderaan', '$pemilikan_kenderaan', '$cukai')";
	$sql2 = "INSERT INTO student_registration(matric_no, vehicle_number) VALUES ('$no_matrik', '$no_pendaftaran')";
	$sql3 = "INSERT INTO student_license(matric_no, license_no, license_valid) VALUES ('$no_matrik', '$lesen', '$sah_lesen')";
	$sql4 = "UPDATE payment SET  fee_collected = '$feestudent' WHERE payment_category = 'student'";
	$sql5 = "UPDATE payment SET  fee_collected = '$feetotal' WHERE payment_category = 'total'";

	if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)&&mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3)&&mysqli_query($conn, $sql4)&&mysqli_query($conn, $sql5))
	{
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Created")';
		echo '</script>';
		echo "<script language=javascript>window.location='registerstudent.php';</script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
