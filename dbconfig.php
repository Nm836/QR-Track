<?php
// dbconfig.php
$connectionString = getenv('SQLAZURECONNSTR_DefaultConnection');
try {
    $conn = new PDO($connectionString);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to the database: " . $e->getMessage());
}
?>
