else if (strlen($password)<6 && (!preg_match($regx_uppercase,$password)) && (!perg_match($regx_lowercase,$password)) && (!preg_match($reg_number,$password)))



else if (!preg_match($pattern,$password))
                        		{
 			$m="<span style='color:red;'>password should contain atleast one uppercase, lowercase and a number</span>";
			header('location: signup.php?m3='.$m);
			}