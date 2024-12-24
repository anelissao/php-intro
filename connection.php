<?php

$servername = "localhost";
$username = "root";
$password = "123456"; // Replace with your MySQL root password
$dbname = "bibliotheque";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>