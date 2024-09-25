<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRTrack Home</title>
</head>
<body>
    <h1>Welcome to QR Track</h1>

    <?php
    // Include other PHP files or handle logic here
    include '1.ConnectionCheck.php';  // Example of including another PHP file
    include '2.Create Database.php'; // Main content of the project
    include '3.1create tablesTest.php';  // Footer content
    include '3.add data.php';
include '4.LoginPage.php';
include '5.1_Registration.php';
include '5.2_VerfiyLogin.php';
include '6_StaffPage.php';
include '7_StaffClass.php';
include '8_StudentAttendanceRecord.php';
include 'Email Sender.php';
include 'Inc_Connect.php';
include 'configmail.php';
include 'config.php';
include 'email.php';
include 'inc_connection.php';
include 'user name QRTrack.txt';
    ?>
</body>
</html>
