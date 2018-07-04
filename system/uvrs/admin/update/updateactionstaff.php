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
	$no_pendaftaran = $_POST['vehicle_no'];
	$jenis_kenderaan = $_POST['vehicle_type'];
	$pemilikan_kenderaan = $_POST['vehicle_ownership'];
	$alamat = $_POST['address'];
	$cukai = $_POST['road_tax'];
	$lesen = $_POST['license_no'];
	$sah_lesen = $_POST['license_valid'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "UPDATE staff SET name = '$nama', address = '$alamat', phone_no = '$no_telefon', position = '$jawatan', location = '$kawasan' WHERE staff_no = '$no_staff'";
	$sql1 = "UPDATE vehicle_staff SET vehicle_no = '$no_pendaftaran', road_tax = '$cukai', vehicle_ownership = '$pemilikan_kenderaan', vehicle_type = '$jenis_kenderaan' WHERE staff_no = '$no_staff'";
	$sql2 = "UPDATE staff_registration SET vehicle_no = '$no_pendaftaran' WHERE staff_no = '$no_staff'";
	$sql3 = "UPDATE staff_license SET license_no = '$lesen', license_valid = '$sah_lesen' WHERE staff_no = '$no_staff'";

	if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)&&mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3))
	{
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Updated")';
		echo '</script>';
		echo "<script language=javascript>window.location='/Asyraf/uvrs/admin/search/searchstaff.php';</script>";
	}
	else
	{
		echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
