<?php
session_start();
require_once '../includes/user.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password)){
        $userSet = user::auth($username, $password);
        if($userSet[0]['user_id']){
            $_SESSION['user_id'] = $userSet[0]['user_id']; 
            header("location:index.php");
        }else{
            $message = "Invlaid Login";
        }
    }else{
        $message = "Username / Paswword Required";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flickr Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>  
        <?php if(isset($message)){echo "<div class='alert alert-danger'>$message</div>";} ?>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="username" name="username">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="password" name="password">
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="submit"/>
      </form>

    </div> <!-- /container -->

  </body>
</html>
