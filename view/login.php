<<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css"></link>
<link rel="stylesheet" type="text/css" href="dist/css/signin.css"></link>
<link rel="stylesheet" type="text/css" href="dist/css/agency.css"></link>
<link rel="stylesheet" href="dist/css/animate.min.css" type="text/css"></link>
<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" type="text/css"></link>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <title>Login</title>
</head>
<body background="img/hw.png">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php?home">D' Toys</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<center>
    </center>
<div class="container">
      <form class="form-signin" action="index.php?ceklogin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" autofocus name="username">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> 
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="submit">Sign in</button>
      </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
        $main = new controller();
        $main->login();
    }
?>