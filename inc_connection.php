
<?php
$servername = 'tcp:qrtrack-server.database.windows.net,1433';
$username = 'NimitM';
$password = 'Capstone@123';


// Create connection
try {
    $conn = new mysqli($servername, $username, $password);
		
}
catch (mysqli_sql_exception $e){
    die("Connection failed: " . $e->getCode(). ": " . $e->getMessage());
}

?>

