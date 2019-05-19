<?php
session_start();


// Opens a connection to a MySQL server.
$connection=mysqli_connect ($host, $user, $pass, $dbName);
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}
?>
