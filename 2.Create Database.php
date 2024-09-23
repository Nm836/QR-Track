<?php
include 'inc_connection.php';
include('dbconfig.php');
try{
	$sql="CREATE DATABASE qrtrack_sample";
	$conn->query($sql);
	echo "Database has been created ";
	}
	catch (mysqli_sql_exception $e) {
		die("Error creating database ".$e->getMessage());
}


?>
