<!DOCTYPE html> 
<html> 
	<head> 
		<title>Result page</title> 

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		
<style type="text/css">
.results {margin-left:12%; margin-right:12%; margin-top:10px;}
</style>
	</head> 
	
	
<body> 

<?php 
  include "navbar_result.php";
  ?>


<form class="container text-center my-3" action="result.php" method="get"> 
		
		<!-- <span><b>Write your Keyword:</b></span> -->
		
		<input type="text" name="user_query" size="120" placeholder="Enter your query"/> 
		<input type="submit" name="search" value="Search">
</form>


	
	<!-- <a href="index.php"><button>Go Back</button></a> -->
	
<?php 

  $upload_dir = 'Doctor/uploads/';

	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"hcs");
	
	if(isset($_GET['search'])){
	
	$get_value = $_GET['user_query'];
	
	if($get_value==''){
	
	echo "<center><b>Please go back, and write something in the search box!</b></center>";
	exit();
	}
	
	$result_query = "SELECT * FROM approved WHERE keywords LIKE '%$get_value%'";
	
	$run_result = mysqli_query($con,$result_query);
	
	if(mysqli_num_rows($run_result)<1){
	
	echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
	exit();
	
	}
	
	while($row_result=mysqli_fetch_array($run_result)){
		
    $name=$row_result['name'];
    $qualifi=$row_result['qualifi'];
		$contact=$row_result['contact'];
		$speciali=$row_result['speciali'];
		$experience=$row_result['experience'];
		$symptoms=$row_result['symptoms'];
    $address=$row_result['address'];
    $image=$row_result['image'];

	
	echo "<div class='card mb-3 container my-5' style='max-width: 540px;'>
    <div class='row g-0'>
      <div class='col-md-4'>
        <img src='$upload_dir$image' class='img-fluid rounded-start' alt='...'>
      </div>
      <div class='col-md-8'>
        <div class='card-body'>
          <h5 class='card-title'>$name , $qualifi</h5>
          <p class='card-text'>$speciali</p>
          <p class='card-text'>$address</p>
          <p class='card-text'><small class='text-muted'>$contact</small></p>

        </div>
      </div>
    </div>
  </div>";

		}
}


?>

</body> 
</html>



<!-- <div class='container card text-center my-3'>
    <div class='card-header'>
      Doctor details
    </div>
    <div class='card-body'>
      <h5 class='card-title'>$qualifi</h5>
      <p class='card-text'>$symptoms</p>
      <a href='#' class='btn btn-primary'>View</a>
    </div>
    <div class='card-footer text-muted'>
    </div>
  </div><br> -->