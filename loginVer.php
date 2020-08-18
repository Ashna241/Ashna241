<?php 


	$dbhost="localhost";
    $username="root";
    $password="root";
    $db="online_pet";
	
	$conn= mysqli_connect("$dbhost","$username","$password","$db") or die("failed");
     echo "successful";

   
    $user  = $_POST['user'];
    $pass = $_POST['pass'];

	$newusersql = "INSERT INTO login (user,pass) 
			VALUES ('$user','$pass');";

	if(mysqli_query($conn,$newusersql))

	header("Location: ../petstore/main.html");
	else
		echo "<br>";
		echo "\r\n";
		echo "invalid username or passsword";
?>