
<?php
$servername = "tcp:qrtrack-server.database.windows.net,1433";
$db_user = "Nm836";
$password = "Capstone@123";


// Create connection
try {
    $conn = new mysqli($servername, $username, $password);
		
}
catch (mysqli_sql_exception $e){
    die("Connection failed: " . $e->getCode(). ": " . $e->getMessage());
}

?>

