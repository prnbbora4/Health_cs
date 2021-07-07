<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","hcs");
if(isset($_POST['submit']))
{
       $name=mysqli_real_escape_string($db,$_POST['name']);
       $username=mysqli_real_escape_string($db,$_POST['username']);
       $email=mysqli_real_escape_string($db,$_POST['email']);
       $password=mysqli_real_escape_string($db,$_POST['password']);
       $password2=mysqli_real_escape_string($db,$_POST['password2']);
       $address=mysqli_real_escape_string($db,$_POST['address']);
       $city=mysqli_real_escape_string($db,$_POST['city']);
       $state=mysqli_real_escape_string($db,$_POST['state']);
       $zip=mysqli_real_escape_string($db,$_POST['zip']);
       $contact=mysqli_real_escape_string($db,$_POST['contact']);
       $photo=mysqli_real_escape_string($db,$_POST['photo']);
       $id=mysqli_real_escape_string($db,$_POST['id']);
       $license=mysqli_real_escape_string($db,$_POST['license']);
       $certificate=mysqli_real_escape_string($db,$_POST['certificate']);
       $experience=mysqli_real_escape_string($db,$_POST['experience']);
       $experiencecertificate=mysqli_real_escape_string($db,$_POST['experiencecertificate']);
    
    
      
    $query = "SELECT * FROM signup WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO signup(name, username, email,  password,  address, city, state, zip, contact, photo, id, license, certificate, experience, experiencecertificate) VALUES('$name', '$username','$email', '$password', '$address', '$city', '$state', '$zip','$contact', '$photo', '$id', '$license', '$certificate', '$experience', '$experiencecertificate')";
                
                mysqli_query($db,$sql);  
                //print_r($lo);
                //$_SESSION['username']=$username;
                header("location: ../Doctor/index.php");  //redirect index page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
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
<!--      </ul>-->
<!---->
<!--    </div>-->
<!--  </div>-->
<!--</nav>-->
<!---->
<!---->
<!--<main class="main-content">-->
<!---->
<!-- <div class="col-md-6 col-md-offset-2">-->
<!---->
<?php
//    if(isset($_SESSION['message']))
//    {
//         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
//         unset($_SESSION['message']);
//    }
//?>
<!--<form method="post" action="register.php">-->
<!--  <table>-->
<!--     <tr>-->
<!--           <td>Username : </td>-->
<!--           <td><input type="text" name="username" class="textInput"></td>-->
<!--     </tr>-->
<!--     <tr>-->
<!--           <td>Email : </td>-->
<!--           <td><input type="email" name="email" class="textInput"></td>-->
<!--     </tr>-->
<!--      <tr>-->
<!--           <td>Password : </td>-->
<!--           <td><input type="password" name="password" class="textInput"></td>-->
<!--     </tr>-->
<!--      <tr>-->
<!--           <td>Password again: </td>-->
<!--           <td><input type="password" name="password2" class="textInput"></td>-->
<!--     </tr>-->
<!--      <tr>-->
<!--           <td></td>-->
<!--           <td><input type="submit" name="register_btn" class="Register"></td>-->
<!--     </tr>-->
<!--    </table>-->
<!---->
<!--</form>-->
<!--</div>-->
<!---->
<!--</main>-->
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->


<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/signup_style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body class="container my-5">



  <form class="row g-3" action="register.php" method="post">

  <div class="col-md-6">
    <label for="inputName4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName4" name="name">
  </div>

  <div class="col-md-6">
    <label for="inputUsername4" class="form-label">Username</label>
    <input type="text" class="form-control" id="inputUsername4" name="username">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password2">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>Choose...</option>
      <option>Assam</option>
      <option>Arunachal Pradesh</option>

    </select>
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="number" class="form-control" id="inputZip" name="zip">
  </div>

  <div class="col-md-2">
    <label for="inputContact" class="form-label">Contact</label>
    <input type="number" class="form-control" id="inputContact" name="contact">
  </div>

  <div class="col-md-6">
    <label for="inputPhoto" class="form-label">Upload Photo</label>
    <input type="file" class="form-control" id="inputPhoto" name="photo">
  </div>

  <div class="col-md-6">
    <label for="inputID" class="form-label">Upload ID</label>
    <input type="file" class="form-control" id="inputID" name="id">
  </div>

  <div class="col-md-6">
    <label for="inputLicense" class="form-label">Doctor's License</label>
    <input type="file" class="form-control" id="inputLicense" name="license">
  </div>

  <div class="col-md-6">
    <label for="inputCertificate" class="form-label">Doctor's Certificate</label>
    <input type="file" class="form-control" id="inputCertificate" name="certificate">
  </div>

  <div class="col-md-6">
    <label for="inputExperience" class="form-label">Experience</label>
    <select id="inputExperience" class="form-select" name="experience">
      <option selected>Choose...</option>
      <option>0-1</option>
      <option>2-5</option>
      <option>6-10</option>
      <option>> 10</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputExperienceCertificate" class="form-label"> Experience Certificate</label>
    <input type="file" class="form-control" id="inputExperienceCertificate" name="experiencecertificate">
  </div>

  


  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
  </div>
</form>




</body>
<script>
    function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
</script>
</html>
</html>


