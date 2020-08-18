<?php
include_once('./config.php');
$sql = "SELECT * FROM pets  WHERE name = 'DOG'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php include_once('./layouts.php'); ?>
  <div class="container mt-5">
    <div class="container-fluid">
      <h1 style="border: 3px solid grey;width: 250px;height: auto;padding:5px ">
        DOGS BREED
      </h1>
      <br />
      <div class="row">
        <?php
        while ($row = $result->fetch_assoc()) {
          echo "<div class='col-md-4 col-sm-4 col-xs-4 col-lg-4'>
                <div class='card mb-3' style='height:400px'>
                  <div class='card-body'>
                      <div class='text-center'>
                      <img src=" . $row['imageUrl'] . " width='80%'/>
                      </div><br>
                      <div>
                      <p>Breed  : " . $row["BREED"] . "</p>
                      <p>Location : " . $row['LOCATION'] . "</p>
                      <p>Price : " . $row['PRICE'] . "</p>
                      <form method='GET' action='/payments.php'>
                        <input type='hidden' value=".$row["PET_ID"]." name='id' readonly></input>
                        <input type='submit' class='btn btn-primary' value='Buy Now'></input>
                      </form>
                      </div>
                  </div>
                </div>
              </div>";
        }
        ?>
        
    </div>
  </div>
  </div>
</body>

</html>
