<?php
session_start();
$host = '';
$user = '';
$pass = '';
$dbName = '';

// Opens a connection to a MySQL server.
$connection=mysqli_connect ($host, $user, $pass, $dbName);
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
