<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Set this to your actual password if you have one
$database = 'finTech';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>