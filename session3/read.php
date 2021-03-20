<!DOCTYPE html>
<html>
<head>
	<title>Read
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
	<a href='create.html'>Add a customer</a>
	<div class='container'>
		<div class='row'>
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "customers";

	$connection = new mysqli($servername, $username, $password, $dbname);


	$sql = "SELECT * FROM customers";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
		echo "<table border='1' class='col-12'>
				<tr><th></th><th>CustomersID</th><th>cust_name</th><th>address_line1</th><th>town</th><th>country</th><th>Tel</th><tr>";
				while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row["customersID"]."</td><td>".$row["cust_name"]."</td><td>".$row["address_line1"]."</td><td>".$row["town"]."</td><td>".$row["country"]."</td><td>".$row["Tel"]."</td><td>
<a href='update.php?id=".$row['customersID']."'>Update</a>//
<a href='delete.php?id=".$row['customersID']."&name=".$row['cust_name']."'>Delete</a>
				</td><tr>";
			}
		echo "</table>";
	}

mysqli_close($connection);






?>
</div>	
</div>
</body>
</html>