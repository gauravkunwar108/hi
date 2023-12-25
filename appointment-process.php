<?php

$mysqli = require __DIR__ . "/database.php";

$fName = $_POST["fName"];
$lName = $_POST["lName"];
$email = $_POST["email"];
$phonenum = $_POST["phonenum"];
$doctor = $_POST["doctor"];

$sql = "INSERT INTO appointment (fName, lName, email, phonenum, doctor)
VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param(
    "sssis",
    $fName,
    $lName,
    $email,
    $phonenum,
    $doctor
);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

$is_invalid = true;
