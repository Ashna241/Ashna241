<?php 


	$dbhost="localhost";
    $username="root";
    $password="";
    $db="online_pet";
	
	$conn= mysqli_connect("$dbhost","$username","$password","$db") or die("failed");
     echo "successful";
     echo "<br>";
     
   	
     $user = $_POST['user'];
     $add = $_POST['NUMBER'];
     $quan=$_POST['quantity'];


     $sql="INSERT INTO bill (user,method,quantity)
			VALUES ('$user','$add','$quan');";
     
       
     if($conn -> query($sql)){
     	echo "THANK YOU $user";
     	echo "<br>";
     	echo "We recieved your order.Have a good day.";
     	echo "<br>";
     	echo "Your bill_no is:".$conn-> insert_id;
    }
	else{
		echo "<br>";
		echo "\r\n";
		echo "invalid username";}

    
?>