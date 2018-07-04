<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$nama = $_POST['name'];
	$no_matrik = $_POST['matric_no'];
	$no_telefon = $_POST['phone_no'];
	$fakulti = $_POST['faculty'];
	$alamat = $_POST['address'];
	$pemohon = $_POST['applicant'];
	$kediaman = $_POST['resident'];
	$no_pendaftaran = $_POST['vehicle_no'];
	$jenis_kenderaan = $_POST['vehicle_type'];
	$cukai = $_POST['road_tax'];
	$lesen = $_POST['license_no'];
	$sah_lesen = $_POST['license_valid'];
	$pemilikan_kenderaan = $_POST['vehicle_ownership'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "UPDATE student SET name = '$nama', faculty = '$fakulti', address = '$alamat', phone_number = '$no_telefon', applicant = '$pemohon', resident = '$kediaman' WHERE matric_no = '$no_matrik'";
	$sql1 = "UPDATE vehicle_student SET vehicle_no = '$no_pendaftaran', road_tax = '$cukai', vehicle_ownership = '$pemilikan_kenderaan', vehicle_type = '$jenis_kenderaan' WHERE matric_no = '$no_matrik'";
	$sql2 = "UPDATE student_registration SET vehicle_number = '$no_pendaftaran' WHERE matric_no = '$no_matrik'";
	$sql3 = "UPDATE student_license SET license_no = '$lesen', license_valid = '$sah_lesen' WHERE matric_no = '$no_matrik'";

	if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)&&mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3))
	{
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Updated")';
		echo '</script>';
		echo "<script language=javascript>window.location='/Asyraf/uvrs/user/search/searchstudent.php';</script>";
	}
	else
	{
		echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
