<?php
$host = "localhost";
$username = "root";
$password = "3918jayesh";
$db = "petstore";

$conn = mysqli_connect($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
