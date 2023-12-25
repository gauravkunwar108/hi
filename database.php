<?php

$host = "64.227.159.106";
$dbname = "clinicdb";
$username = "ucetgmffhz";
$password = "VrYW6htk98";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
