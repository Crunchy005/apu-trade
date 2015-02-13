<?php
	function create_account($email, $livingarea, $password)
	{
		include("db_con.php");
		$safe_email = mysqli_real_escape_string($con, $email);
		
		$password = md5($password);
		
		$q1 = "INSERT INTO USERS (LIVING, PASSWORD, EMAIL)
		VALUES ('$livingarea', '$password', '$safe_email')";
		
		$q2 = "Select * FROM USERS where EMAIL = '$safe_email'";
		$result = mysqli_query($con, $q2) or die ("Error checking Email ".mysqli_error($con));
		if(mysqli_num_rows($result) > 0)
			return false;
		else
		{
			$result = mysqli_query($con, $q1) or die ("Error creating 
			user ".mysqli_error($con));
			if($result)
			{
				$_SESSION['username'] = $safe_email;
				return true;
			}
			else
				return false;
		}
			
		
	}
	
	function login($email, $password)
	{
		include("db_con.php");
		
		$safe_email = mysqli_real_escape_string($con, $email);
		
		$password = md5($password);
				
		$q = "select * from USERS where EMAIL = '$safe_email' and PASSWORD = '$password'";
		$result = mysqli_query($con, $q) or die ("Error checking login " . mysqli_error($con));
		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['username'] = $email;
			return true;
		}else
			return false;
	}
	
	function create_post($subject, $message, $price, $email)
	{
		include("db_con.php");
		$price = str_replace('$', '', $price);
		$current_date = date("Y-m-d");
		$q = "insert into POSTS (M_SUBJECT, MESSAGE, PRICE, M_DATE, EMAIL) values ('$subject', '$message', $price, '$current_date', '$email')";
		$result = mysqli_query($con, $q) or die ("error creating post " . mysqli_error($con));
		if($result)
			return true;
		else
			return false;
	}
?>