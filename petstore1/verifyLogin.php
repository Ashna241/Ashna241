     <?php

    
     $dbhost="localhost";
     $username="root";
     $password="";
     $db="online_pet";

     $con= mysqli_connect("$dbhost","$username","$password","$db") or die("failed");
     echo "successful";
     echo "<br>";
     mysqli_select_db($con,$db);
     echo "database connected";

     if (isset($_POST['user'])) {
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $s="SELECT * FROM details where user='".$user."' AND pass='".$pass."'limit 1";
      //  $s = "select * from details where login_id='".$usernam."'";
        $result=mysqli_query($con,$s);
        $num=mysqli_num_rows($result);

        if($num==1){
            //echo "logged in";
            header("Location: ../petstore/index.html");
            //exit();
        }
        else{
            echo "<br>";
            echo "login failed";
            exit();
        }
     }
     ?>