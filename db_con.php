<?php
	$db_database = "APUTRADE";
	$db_server = "localhost";
	$db_user = "root";
	$db_password = "K@m3H@m3Ha";
	
	$con = mysqli_connect($db_server, $db_user, $db_password, $db_database) or die ("Error " . mysqli_connect_error($con));
?>