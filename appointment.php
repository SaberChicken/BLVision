<?php

$name = $_POST["name"];
$contact = $_POST["contact"];
$reason = $_POST["reason"];
$insurance = $_POST["insurance"];
$prescription = $_POST["prescription"];
$comments = $_POST["comments"];

$host = "localhost";
$dbname = "appointment_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host, 
                       username: $username, 
                       password: $password, 
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO appointment (name, contact, reason, insurance, prescription, comments)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssss",
                       $name,
                       $contact,
                       $reason,
                       $insurance,
                       $prescription, 
                       $comments);

mysqli_stmt_execute($stmt);

header('location:contact-us.html');