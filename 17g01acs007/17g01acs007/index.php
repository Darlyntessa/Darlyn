<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery"></script>
    <script src = "bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home1.css">
</head>
<body>
    <div class="container" >
    <div class="jumbotron">
    <div>
    </div>
    <h1 class="h1">Login</h1>
    <a class="btn btn-primary"href="registration.php">sign up</a>
    </div>
    <form action="validate.php" method="post">
    <div class="control-group">
    <label for="username" class="control-label col-sm-3"> username</label>
    <div class="col-sm-6">
    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username " required>
    </div>
    </div>
    
    <div class="form-group">
    <label for="password" class="control-label col-sm-3">Password</label>
    <div class="col-sm-6">
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2">
    <input type="submit" class="btn btn-success form-control" name="submit_form" value="Login">
    </div>
    
    
    </div>
    </form>
    </div>
</body>
</html>