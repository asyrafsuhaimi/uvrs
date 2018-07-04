<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("registration") or die(mysql_error());
	
		$query = $_POST['search'];
		$status = "";
		$name ="";
		$matric_no = "";
		$phone_no = "";
		$faculty = "";
		$address = "";
		$applicant = "";
		$resident = "";
		$vehicle_no ="";
		$vehicle_type = "";
		$road_tax = "";
		$license_no = "";
		$license_valid = "";
		$vehicle_ownership = "";
		$vehicle_results = mysql_query("SELECT * FROM vehicle_student
					       WHERE (`vehicle_no` LIKE '%".$query."%') OR (`matric_no` LIKE '%".$query."%')") or die(mysql_error()); 
		$student_results = mysql_query("SELECT * FROM student
					               WHERE (`matric_no` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());		
		$license_results = mysql_query("SELECT * FROM student_license
					               WHERE (`license_no` LIKE '%".$query."%') OR (`matric_no` LIKE '%".$query."%')") or die(mysql_error());
			$min_length = 1;
			if(strlen($query) >= $min_length)
			{        
				$query = htmlspecialchars($query);    
				$query = mysql_real_escape_string($query);				
	
					if(mysql_num_rows($student_results)> 0)
					{
						while($results = mysql_fetch_array($student_results))
						{ 
							$status = "Result Found";
							$name = $results['name'];
							$matric_no = $results['matric_no'];
							$phone_no = $results['phone_number'];
							$faculty = $results['faculty'];
							$address = $results['address'];
							$applicant = $results['applicant'];
							$resident = $results['resident'];


										
						}
					}
					else
					{
							$status = "No Result Found";
							$name = "No result";
							$matric_no = "No result";
							$phone_no = "No result";
							$faculty = "No result";
							$address = "No result";
							$applicant = "No result";
							$resident = "No result";

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
				else
				{ 
					
				}
?>