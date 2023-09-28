<?php
session_start();
$dbHost = 'localhost';
$dbName = 'form';
$dbUsername = 'root';
$dbPassword = 'mysql';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>
