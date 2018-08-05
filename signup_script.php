<?php
	error_reporting(0);
	require_once("connection.php");
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['e-mail'];
		$password = $_POST['password'];
		
		$contact = $_POST['contact'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";
		
		$query = "SELECT * FROM persons WHERE Email='$email'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);
		

		if ($num != 0)
			{
			$m = "<span style='color:red;'>Email Already Exists</span>";
			header('location: signup.php?m1='.$m);
			}
		else if (!preg_match($regex_email, $email))
			{
			$m = "<span style='color: red;'>Not a valid Email Id</span>";
			header('location: signup.php?m1='.$m);
			}
		
		else if (!preg_match($regex_num, $contact))
			{
			$m = "<span style='color: red;'>Not a valid phone number</span>";
			header('location: signup.php?m2='.$m);
			}
		
 		
		else{
			$password = MD5($password);
			$query = "INSERT INTO persons
			(Name, Email, Password, Contact, City, Address)
			VALUES
			('{$name}','{$email}','{$password}','{$contact}','{$city}','{$address}')";
			if(mysqli_query($con,$query)){
				session_start();
				$_SESSION['email']=$email;
				header('location: home.php');	
			}else{
				echo "error while inserting the records".mysqli_error($con);
			}
		}
	}
?>