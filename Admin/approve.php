<?php
$con=mysqli_connect("localhost", "root", "", "hcs") or die(mysqli_error());

if(isset($_GET['id']))
{
	
$i = $_GET['id'];
$q = "delete from p_status where id = '$i'";
$create_query="CREATE TABLE approved LIKE p_status;";
mysqli_query($con,$create_query);

$copy_query = "INSERT INTO approved SELECT * FROM p_status where id='$i';";

$c = mysqli_query($con,$copy_query);

if(!$c)
{
	
	echo "<h1> Failed to Approved........</h1> ";
}
else
{
	mysqli_query($con, $q);
	header("location:applications.php");
	
}

}


?>