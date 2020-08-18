<?php
if (isset($_POST["name"])) {
    include_once('./config.php');
    $name = $_POST["name"];
    $breed = $_POST["breed"];
    $price = $_POST["price"];
    $petId = $_POST["petid"];
    $location = $_POST["location"];
    $imageUrl = $_POST["imageUrl"];
    $sql = "INSERT INTO pets (NAME, BREED, PRICE, PET_ID, LOCATION, imageUrl)
VALUES ('$name', '$breed', '$price', '$petId', '$location', '$imageUrl')";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h4>Want to Delete Pets ? <a href="deletePets.php">Delete</a></h4>
                <div class="jumbotron mt-5">
                    <h3>Add Pets</h3>
                </div>
                <?php
                if (isset($_POST["name"])) {
                    if ($conn->query($sql) === TRUE) {
                        echo "<span class=' mt-5 alert alert-success alert-dismissible'>Record Added successfully</span>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                ?>
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Breed</label>
                        <input class="form-control" type="text" name="breed">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input class="form-control" type="number" name="price">
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">imageUrl</label>
                        <input class="form-control" type="text" name="imageUrl">
                    </div>
                    <div class="form-group">
                        <label for="">Pet Id</label>
                        <input class="form-control" type="text" name="petid">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>