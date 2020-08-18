<?php
include_once('./config.php');
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["email"] === $email) {
            if ($row["password"] === $password) {
                echo "<script type='text/javascript'>window.top.location='http://localhost:8080/add.php';</script>";
            } else {
                echo "<script type='text/javascript'>window.top.location='http://localhost:8080/adminlogin.php';</script>";
                echo "Wrong Password";
            }
        } else {
            echo "Not Registered";
        }
    }
}
?>