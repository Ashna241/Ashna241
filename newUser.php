<?php 


	$dbhost="localhost";
    $username="root";
    $password="";
    $db="online_pet";
	
	$conn= mysqli_connect("$dbhost","$username","$password","$db") or die("failed");
     echo "successful";

    $email  = $_POST['email'];
    $user  = $_POST['user'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];
    $add = $_POST['add'];
    $sex=$_POST['gender'];

	$newusersql = "INSERT INTO details (email,user,firstName,lastName,pass,contact,address,sex) 
			VALUES ('$email','$user','$firstname','$lastname','$pass','$contact','$add','$sex');";

	if(mysqli_query($conn,$newusersql))

	header("Location: ../petstore/main.html");
	else
		echo "<br>";
		echo "\r\n";
        
		echo "invalid username or passsword";
?>