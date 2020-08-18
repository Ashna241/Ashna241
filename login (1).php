

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
       
    </head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="index.html">
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
                <a class="nav-link" href="adminlogin.html"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a>
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
                    <h3>Login</h3>
                    
                   
                </div>
                <div class="card-body">
                    <form  action="loginVer.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="user" class="form-control" placeholder="login_id">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="pass" class="form-control" placeholder="password" >
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" name="submit" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
               
                
    </div>
    </body>
    </html>
</head>


