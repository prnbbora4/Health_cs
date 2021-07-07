<?php
session_start();
//if(  isset($_SESSION['username']) )
//{
//  header("location:index.php");
//  die();
//}
//connect to database
$db=mysqli_connect("localhost","root","","hcs");
if($db)
{
  if(isset($_POST['submit']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      //$password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM admin WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location:admin.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>



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
            <!-- <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player> -->
            <input type="text" placeholder="username" name="username"/>
            <input type="password" id="password" placeholder="password"  name="password"/>
            <br>
            <button type="submit" name="submit" value="LOG IN">LOG IN </button>
            <p class="message"></p>
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
