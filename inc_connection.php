
<?php
$db_host = 'your-mysql-host.azure.com';
$db_name = 'your-database-name';
$db_user = 'your-username@your-mysql-host';
$db_pass = 'your-password';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
