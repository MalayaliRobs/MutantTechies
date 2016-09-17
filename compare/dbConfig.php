<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'dreamwwu_robin';
$dbPassword = '123456';
$dbName = 'dreamwwu_vehicle';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>