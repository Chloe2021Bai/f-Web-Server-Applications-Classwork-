<html>
    <head>
        <title>Create</title>
        
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "customers";

        $conn = new mysqli($servername,$username,$password,$database);
        if($conn->connect_error){
            die("Connection failed:" . $conn->connect_error);
        }
        $customersID = $_POST['customersID'];
        $cust_name = $_POST['cust_name'];
        $address_line1 = $_POST['address_line1'];
        $town = $_POST['town'];
        $country = $_POST['country'];
        $Tel = $_POST['Tel'];
        $sql = "INSERT INTO customers (customersID, cust_name, address_line1, town, country, Tel) VALUE(' $customersID',' $cust_name',' $address_line1','$town','$country','$Tel')";
        if($conn->query($sql)=== TRUE){
            echo"New record created successfully";
        }
        else{
            echo"Error: ". $sql ."<br>" . $conn->error;
        }
        $conn->close();


        ?>
    </body>
</html>