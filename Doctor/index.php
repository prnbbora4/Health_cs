<?php

session_start();
if(isset($_SESSION['username']) )
{
  header("location: ../Doctor/profile.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","hcs");
if($db)
{
  if(isset($_POST['submit']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM signup WHERE  username='$username' AND password='$password'";
      print_r($sql);
      $result=mysqli_query($db,$sql);
      //print_r($result);
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location: ../Doctor/profile.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <title>Rabbani sarkar</title>-->
<!--  <meta charset="utf-8">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--  <link rel="stylesheet" href="style.css">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<div class="container">-->
<!--  <hgroup>-->
<!--    <h1 class="site-title" style="text-align: center; color: green;">Login, Registration, Logout</h1><br>-->
<!--  </hgroup>-->
<!---->
<!--<br>-->
<!--<nav class="navbar navbar-inverse">-->
<!--  <div class="container-fluid">-->
<!--   Collect the nav links, forms, and other content for toggling -->
<!--    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--      <ul class="nav navbar-nav center">-->
<!--        <li><a href="login.php">LogIN</a></li>-->
<!--        <li><a href="register.php">SignUp</a></li>-->
<!--        <li><a href="logout.php">LogOut</a></li>-->
<!--      </ul>-->
<!---->
<!--    </div>-->
<!--  </div>-->
<!--</nav>-->
<!---->
<!--<main class="main-content">-->
<!-- <div class="col-md-6 col-md-offset-2">-->
<?php
//    if(isset($_SESSION['message']))
//    {
//         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
//         unset($_SESSION['message']);
//    }
//?>
<!--<form method="post" action="login.php">-->
<!--  <table>-->
<!--     <tr>-->
<!--           <td>Username : </td>-->
<!--           <td><input type="text" name="username" class="textInput"></td>-->
<!--     </tr>-->
<!--      <tr>-->
<!--           <td>Password : </td>-->
<!--           <td><input type="password" name="password" class="textInput"></td>-->
<!--     </tr>-->
<!--      <tr>-->
<!--           <td></td>-->
<!--           <td><input type="submit" name="login_btn" class="Log In"></td>-->
<!--     </tr>-->
<!-- -->
<!--</table>-->
<!--</form>-->
<!--</div>-->
<!---->
<!--</main>-->
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->


<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">


<div class="login-page">
    <div class="form">

        <form method="post" action="index.php">
<!--            <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>-->
            <input type="text" placeholder="username" name="username"/>
            <input type="password" id="password" placeholder="password"  name="password"/>
            <br>
            <button type="submit" name="submit" value="LOG IN">SIGN IN</button>
            <p class="message"></p>
        </form>

        <form class="login-form">
            <button type="button" onclick="window.location.href='register.php'">SIGN UP</button>
        </form>
    </div>
</div>

<script>
    function show(){
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas")

        // ========== Checking type of password ===========
        if(password.type === "password"){
            password.type = "text";
        }
        else {
            password.type = "password";
        }
    };
</script>
</body>
</html>
