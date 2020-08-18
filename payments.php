<?php
include_once('./config.php');
$id = $_GET["id"];
$sql = "SELECT * FROM pets  WHERE PET_ID = $id";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment </title>
</head>

<body>
    <?php include_once('./layouts.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 col-xs-5 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h3>Payment </h3>
                        <hr>
                        <form action="success.php" method="POST">
                        <div class="row">
                            <div class="text-left col-md-6 col-xs-6">
                                <p>Name : </p>
                                <p>Price : </p>
                                <p>Location : </p>
                            </div>
                            <div class="text-left col-md-6 col-xs-6">
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo  "<input readonly name='name' class='form-control' id='name' value='" . $row['BREED'] . "'></input>";
                                    echo  "<input readonly name='price' id='price' class='form-control' value='" . $row['PRICE'] . "'></input>";
                                    echo  "<input readonly name='location' id='location' class='form-control' value='" . $row['LOCATION'] . "'</input>";
                                }
                                ?>
                            </div>
                        </div>
                        <hr>
                            <div class="form-group">
                                <label for="">Name On Card</label>
                                <input type="text" class="form-control" name="person" required>
                            </div>
                            <div class="form-group">
                                <label for="">Credit Card Number</label>
                                <input type="number" name="card" id="card" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Exp Date</label>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">CVV</label>
                                <input type="number" class="form-control" name="cvv">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>