<?php
$servername="tcp:qrtrack-server.database.windows.net,1433";
$username="NimitM";
$password="Capstone@123";
$Databasename="qrtrack_sample";
try{
$conn= new mysqli($servername,$username,$password,$Databasename);
}
catch (mysqli_sql_exception $e) {
die("Connection Error : ".$e->getMessage());
}
?>
