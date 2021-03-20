<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "customers";

	$connection = new mysqli($servername, $username, $password, $dbname);

	


	$sql = "INSERT INTO customers VALUES ('".$_POST["customersID"]."','".$_POST["cust_name"]."','".$_POST["address_line1"]."','".$_POST["town"]."','".$_POST["country"]."','".$_POST["Tel"]."')";

	if ($connection->query($sql) === TRUE){
		echo "New record created successfully";
	}
	else{
		echo "Richard, you failed... BADLLYYYY";
	}

	$connection->close();
 ?>


</body>
</html>