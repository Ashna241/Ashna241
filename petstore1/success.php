<?php
include_once('./config.php');
$name = $_POST["name"];
$id = uniqid();
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <?php include_once('./layouts.php'); ?>
    <div class="jumbotron">
        <?php
        if (!$result) {
            echo "<div class='alert alert-success'>
            <h1>Successfull payment..</h1>
                <h5>Your Order Id is " . $id . "</h5>
                <div>
                <p>Here is the Deatils of your Order</p>
                    Price : " . $_POST['price'] . "<br>
                    Name : " . $_POST['person'] . "<br>
                    Breed : " . $_POST['name'] . "<br>
                </div></div>
            ";
        } else {
            echo "<span class='alert alert-danger'><h1>Something Went Wrong</h1></span>";
        }
        ?>
    </div>
</body>

</html>