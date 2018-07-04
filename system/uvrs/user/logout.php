<?php
session_start();
	unset($_SESSION['login']);
	echo "<script language=javascript>alert('You Had Succesfully Logout.');window.location='/Asyraf/uvrs/userlogin.php';</script>";
?>
