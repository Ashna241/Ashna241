<?php
include_once('./config.php');
$sql = "SELECT * FROM pets";
$result = $conn->query($sql);
if (isset($_POST["pets"])) {
    $id = $_POST["pets"];
    $sql2 = "DELETE FROM pets WHERE PET_ID = '$id'";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Delete Post</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="jumbotron">
                    <h2>Select and Delete from DropDown</h2>
                </div>
                <?php
                if (isset($_POST["pets"])) {
                    if ($conn->query($sql2) === TRUE) {
                        echo "<span class=' mt-5 alert alert-success alert-dismissible'>Record deleted successfully</span>";
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                }
                ?><br><br><br>
                <form action="deletePets.php" method="post">
                    <div class="form-group">
                        <label for="">Select Pet to Delete</label>
                        <select name="pets" class="form-control" id="pets">
                            <?php while ($row = $result->fetch_assoc()) {
                                echo "<option value=" . $row['PET_ID'] . ">" . $row['BREED'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Delete" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>