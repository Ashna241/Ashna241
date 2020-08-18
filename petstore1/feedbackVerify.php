<?php 


	$dbhost="localhost";
    $username="root";
    $password="";
    $db="online_pet";
	
	$conn= mysqli_connect("$dbhost","$username","$password","$db") or die("failed");
     echo "successful";
    
     
       
     
    $exp = $_POST['experience'];
    $rec  = $_POST['recommend'];
    $com = $_POST['comments'];
    $user = $_POST['user'];
    
   

	$newusersql = "INSERT INTO feedback (experience,recommend,comments,user) 
			VALUES ('$exp','$rec','$com','$user');";

	if(mysqli_query($conn,$newusersql)){
    echo "<br>";
	echo "THANK YOU FOR YOUR FEEDBACK $user!!";}
	else{
		echo "<br>";
		echo "\r\n";
		echo "invalid username";}

    
?>