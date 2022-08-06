<?php
//have to controll the user data!
?>

//have to build these pages: controllerUserData.php, forgot-password.php, signup-user.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="post" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    //here should show errors
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" required placeholder="Password" >
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input type="submit" name="login" class="form-control" value="login" >
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>