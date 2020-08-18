<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="feedback.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="main.css">
    <title>FEEDBACK</title>

</head>
<body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="main.html">
              My Pet Store
            </a>
            <ul class="navbar-nav navbar-right">
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="details.html">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payment.html">Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php>"><span class="glyphicon glyphicon-log-in"></span> Feedback</a>
              </li>
            </ul>
        </nav>
   
        <div class="container">
        <div class="d-flex justify-content-center h-100">
        <div class="card">
        <div class="card-header">
       
<h1>FEEDBACK!!</h1>
<br>
<br><br><br>
                <div class="card-body">
                <form action="feedbackVerify.php" method="POST">
                <div class="input-group form-group">
                <div class="input-group-prepend"></div>
                <h2>How was your experience with us??????</h2>
    
    <h5>
  <form>
  <input type="radio" name="experience" value="best" checked> BEST<br>
  <input type="radio" name="experience" value="good"> GOOD<br>
  <input type="radio" name="experience" value="can be better"> CAN BE BETTER<br>
  <input type="radio" name="experience" value="bad"> BAD<br>
   </h5>
        </div>
 <div class="input-group form-group">
 <div class="input-group-prepend"></div>
 <h2>How likely are you going to recommend us????</h2>
 <h5>
 <form action="feedbackVerify.php" method="POST">
 <input type="radio" name="recommend" value="very likely" checked>VERY LIKELY<br>
 <input type="radio" name="recommend" value="likely"> LIKELY<br>
 <input type="radio" name="recommend" value="maybe"> MAYBE<br>
 <input type="radio" name="recommend" value="not at all">NOT AT ALL<br>
 </form>
 </h5>
 </div>
    <div class="input-group form-group">
    <div class="input-group-prepend"></div>

<h2>Write your comments(if any):</h2>
<textarea rows="4" cols="50" placeholder="TYPE HERE" name="comments"></textarea>
<h2>Enter Login Id:
<input type="text" name="user" placeholder="login id"></h2>
<input type="submit" value="submit" name="submit" class="btn float-left login_btn">
</form>
<h2>Thank You for visiting us!!!!</h2>
</div>
</form>
</div>
</div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

