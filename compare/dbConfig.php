<?php
//db details
$dbHost = 'sql207.epizy.com	';
$dbUsername = 'epiz_18892616	';
$dbPassword = 'herohonda123';
$dbName = 'epiz_18892616_cars';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>