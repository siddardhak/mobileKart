<?php
	$con= @mysqli_connect("127.0.0.1","root","siddhu28","employee_details");
                 $name=$_POST['name'];
   	$desig=$_POST['Designation'];
	$manager=$_POST['Manager'];
	$query = "INSERT INTO employee_data
			(Employee_name,Employee_designation,Reporting_manager)
			VALUES
			('{$name}','{$desig}','{$manager}')";



?> 