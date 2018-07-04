<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$delete = $_POST['delete'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM admin WHERE user= '$delete'";
$sql1 = "DELETE FROM user WHERE user= '$delete'";

if ($conn->query($sql)&&$conn->query($sql1) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Deleted")';
		echo '</script>';
		echo "<script language=javascript>window.location='/Asyraf/uvrs/admin/search/searchuser.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
