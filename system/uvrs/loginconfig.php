<?php
session_start();

$_SESSION['login']="succesful login";


    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("registration") or die(mysql_error());
		$username = $_POST['username'];
		$password = $_POST['password'];

		$login_admin_results = mysql_query("SELECT * FROM admin
					       WHERE user = '$username' AND password = '$password'") or die(mysql_error());

    $login_user_results = mysql_query("SELECT * FROM user
             		 WHERE user = '$username' AND password = '$password'") or die(mysql_error());

			$min_length = 3;
			if(strlen($username) >= $min_length)
			{
					if(mysql_num_rows($login_admin_results)> 0)
					{
						while($results = mysql_fetch_array($login_admin_results))
						{
							echo '<script language="javascript">';
							echo 'alert("Login Succesful")';
							echo '</script>';
							echo "<script language=javascript>window.location='admin/index.php';</script>";
						}
					}
          else if(mysql_num_rows($login_user_results)> 0)
					{
						while($results = mysql_fetch_array($login_user_results))
						{
							echo '<script language="javascript">';
							echo 'alert("Login Succesful")';
							echo '</script>';
							echo "<script language=javascript>window.location='user/index.php';</script>";
						}
					}
					else
					{
            	unset($_SESSION['login']);
							echo '<script language="javascript">';
							echo 'alert("Login Failed")';
							echo '</script>';
							echo "<script language=javascript>window.location='userlogin.php';</script>";
					}
			}

?>
