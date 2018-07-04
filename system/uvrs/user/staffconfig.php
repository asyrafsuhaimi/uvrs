<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("registration") or die(mysql_error());

		$query = $_POST['search'];
		$status = "";
		$name ="";
		$staff_no = "";
		$phone_no = "";
		$location = "";
		$address = "";
		$position = "";
		$vehicle_no ="";
		$vehicle_type = "";
		$road_tax = "";
		$license_no = "";
		$license_valid = "";
		$vehicle_ownership = "";
		$vehicle_results = mysql_query("SELECT * FROM vehicle_staff
					       WHERE (`vehicle_no` LIKE '%".$query."%') OR (`staff_no` LIKE '%".$query."%')") or die(mysql_error());
		$staff_results = mysql_query("SELECT * FROM staff
				         WHERE (`staff_no` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());
		$license_results = mysql_query("SELECT * FROM staff_license
					               WHERE (`license_no` LIKE '%".$query."%') OR (`staff_no` LIKE '%".$query."%')") or die(mysql_error());
			$min_length = 3;
			if(strlen($query) >= $min_length)
			{
				$query = htmlspecialchars($query);
				$query = mysql_real_escape_string($query);

					if(mysql_num_rows($staff_results)> 0)
					{
						while($results = mysql_fetch_array($staff_results))
						{
							$status = "Result Found";
							$name = $results['name'];
							$staff_no = $results['staff_no'];
							$phone_no = $results['phone_no'];
							$location = $results['location'];
							$address = $results['address'];
							$position = $results['position'];
						}
					}
					else
					{
							$status = "No Result Found";
							$name = "No Result Found";
							$staff_no = "No Result Found";
							$phone_no = "No Result Found";
							$location = "No Result Found";
							$address = "No Result Found";
							$position = "No Result Found";

					}
					if(mysql_num_rows($license_results)> 0)
					{
						while($results = mysql_fetch_array($license_results))
						{

							$license_no = $results['license_no'];
							$license_valid = $results['license_valid'];


						}
					}
					else
					{}
					if(mysql_num_rows($vehicle_results)> 0)
					{
						while($results = mysql_fetch_array($vehicle_results))
						{

							$vehicle_no = $results['vehicle_no'];
							$vehicle_type = $results['vehicle_type'];;
							$vehicle_ownership = $results['vehicle_ownership'];
							$road_tax = $results['road_tax'];
						}
					}
					else
					{}
				}

?>
