<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "customers";

		$connection = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT * FROM customers WHERE customersID = ".$_GET['id'];
		$result = mysqli_query($connection, $sql);

		if(mysqli_num_rows($result) > 0 ){
			while($row = mysqli_fetch_assoc($result)){
				echo "<form action='update.php?id=".$_GET['id']."' method='post'>
					<label>cust_Name: </label><input type='text' name='cust_name' value='".$row['cust_name']."'><br>
					<label>address: </label><input type='text' name='address_line1' value='".$row['address_line1']."'><br>
					<label>Town: </label><input type='text' name='town' value='".$row['town']."'><br>
					<label>country: </label><input type='text' name='country' value='".$row['country']."'><br>
					<label>Tel: </label><input type='text' name='Tel' value='".$row['Tel']."'><br>
						<br>
						<br>
						<input type='submit' name='submit'>
					</form>";

				}
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$sqlupdate = "UPDATE customers SET cust_name = '".$_POST['cust_name']."', address_line1 = '".$_POST['address_line1']."', town = '".$_POST['town']."', country = '".$_POST['country']."', Tel = '".$_POST['Tel']."' WHERE customersID = ".$_GET['id'];
				

				if ($connection->query($sqlupdate) === TRUE){
					echo "New record updated successfully, <a href='read.php'>click here</a> to leave this page";
				}
				else{
					echo "Update Failed, please try again later";
				}





			}





	?>
</body>
</html>