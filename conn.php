<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database = "test";

$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connection Successfully...";
?>