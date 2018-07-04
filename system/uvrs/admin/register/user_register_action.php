
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$type = $_POST['type'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO ".$type." (user, password) VALUES ('$uname', '$pword')";


	if (mysqli_query($conn, $sql))
	{
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Created")';
		echo '</script>';
		echo "<script language=javascript>window.location='registeruser.php';</script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
