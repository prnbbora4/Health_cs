<?php
include('add.php')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Doctors </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
</head>
<body>

<!--    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">-->
<!--      <div class="container">-->
<!--        <a class="navbar-brand" href="index.php">PHP CRUD WITH IMAGE</a>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">-->
<!--          <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav mr-auto"></ul>-->
<!--            <ul class="navbar-nav ml-auto">-->
<!--              <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </nav>-->
<?php
include "navbar.php";
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-header text-center">Application for approval</div>
                <div class="card-body">
                    <form class="" action="add.php" method="post" enctype="multipart/form-data">
                        
                        <?php
                            $sql = "select * from signup";
                            $result = mysqli_query($conn, $sql);
                    		    if(mysqli_num_rows($result)){
                    				while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Enter your name" value="<?php echo $row['name'] ?> ">
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" name="email"  placeholder="Enter your name" value="<?php echo $row['email'] ?> ">
                        </div>

                        <div class="form-group">
                            <label for="name">Contact</label>
                            <input type="number" class="form-control" name="contact"  placeholder="Enter your name" value="<?php echo $row['contact'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="name">Address</label>
                            <input type="text" class="form-control" name="address"  placeholder="Enter your name" value="<?php echo $row['address'] ?>, <?php echo $row['city'] ?>, <?php echo $row['zip'] ?>">
                        </div>

                        <?php
                              }
                            }
                          ?>

                        <div class="form-group">
                            <label for="name">Qualification</label>
                            <input type="text" class="form-control" name="qualifi"  placeholder="Enter Qualification" value="">
                        </div>

                        <div class="form-group">
                            <label for="contact">Specialization:</label>
                            <input type="text" class="form-control" name="speciali" placeholder="Enter Specialization" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Experience</label>
                            <input type="number" class="form-control" name="experience" placeholder="Enter Experience" value="">
                        </div>
                        <div class="form-group">
                            <label for="contact">Symptoms:</label>
                            <input type="text" class="form-control" name="symptoms" placeholder="Enter Symptoms" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Enter Keywords" value="">
                        </div>

                        <div class="form-group">
                            <label for="image">Qualification Certificate</label>
                            <input type="file" class="form-control" name="image" value="">
                        </div>

                        <div class="form-group">
                            <label for="image">Experience Certificate</label>
                            <input type="file" class="form-control" name="image1" value="">
                        </div>

                        <div class="form-group">
                            <label for="image">Photo</label>
                            <input type="file" class="form-control" name="image2" value="">
                        </div>

                        <div class="form-group">
                            <label for="image">ID Proof</label>
                            <input type="file" class="form-control" name="image3" value="">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</body>
</html>
