<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("registration") or die(mysql_error());

		$query = $_POST['search'];
		$uname ="";
		$pword = "";


		$user_results = mysql_query("SELECT * FROM admin
					       WHERE (`user` LIKE '%".$query."%')") or die(mysql_error());
    $user_results1 = mysql_query("SELECT * FROM user
             					       WHERE (`user` LIKE '%".$query."%')") or die(mysql_error());

			$min_length = 1;
			if(strlen($query) >= $min_length)
			{
				$query = htmlspecialchars($query);
				$query = mysql_real_escape_string($query);

					if(mysql_num_rows($user_results)> 0)
					{
						while($results = mysql_fetch_array($user_results))
						{
							$uname = $results['user'];
							$pword = $results['password'];
						}
					}
          else if(mysql_num_rows($user_results1)> 0)
					{
						while($results = mysql_fetch_array($user_results1))
						{
							$uname = $results['user'];
							$pword = $results['password'];
						}
					}
					else
					{
							$uname = "No result";
							$pword = "No result";
					}
				}
				else
				{ 	}
?>
