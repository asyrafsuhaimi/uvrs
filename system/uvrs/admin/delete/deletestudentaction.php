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
$sql = "DELETE FROM student WHERE matric_no= '$delete'";
$sql2 = "DELETE FROM student_license WHERE matric_no= '$delete'";
$sql3 = "DELETE FROM student_registration WHERE matric_no= '$delete'";
$sql4 = "DELETE FROM vehicle_student WHERE matric_no= '$delete'";

if ($conn->query($sql)&&$conn->query($sql2)&&$conn->query($sql3)&&$conn->query($sql4) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Record Succesfully Deleted")';
		echo '</script>';
		echo "<script language=javascript>window.location='/Asyraf/uvrs/admin/search/searchstudent.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
