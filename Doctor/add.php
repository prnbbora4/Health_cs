<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    // $name = $_POST['name'];
    // $contact = $_POST['contact'];
    // $email = $_POST['email'];


	$name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
	
	$qualifi = $_POST['qualifi'];
    $speciali = $_POST['speciali'];
    $experience = $_POST['experience'];
    $symptoms = $_POST['symptoms'];
    $keywords = $_POST['keywords'];

    $imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];

    // if(empty($name)){
	// 		$errorMsg = 'Please input name';
	// 	}elseif(empty($contact)){
	// 		$errorMsg = 'Please input contact';
	// 	}elseif(empty($email)){
	// 		$errorMsg = 'Please input email';
	// 	}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		//}

		$imgName1 = $_FILES['image1']['name'];
		$imgTmp1 = $_FILES['image1']['tmp_name'];
		$imgSize1 = $_FILES['image1']['size'];

		$imgExt = strtolower(pathinfo($imgName1, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic1 = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize1 < 5000000){
					move_uploaded_file($imgTmp1 ,$upload_dir.$userPic1);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}

			$imgName2 = $_FILES['image2']['name'];
			$imgTmp2 = $_FILES['image2']['tmp_name'];
			$imgSize2 = $_FILES['image2']['size'];
	
			$imgExt = strtolower(pathinfo($imgName1, PATHINFO_EXTENSION));
	
				$allowExt  = array('jpeg', 'jpg', 'png', 'gif');
	
				$userPic2 = time().'_'.rand(1000,9999).'.'.$imgExt;
	
				if(in_array($imgExt, $allowExt)){
	
					if($imgSize2 < 5000000){
						move_uploaded_file($imgTmp2 ,$upload_dir.$userPic2);
					}else{
						$errorMsg = 'Image too large';
					}
				}else{
					$errorMsg = 'Please select a valid image';
				}

				$imgName3 = $_FILES['image3']['name'];
				$imgTmp3 = $_FILES['image3']['tmp_name'];
				$imgSize3 = $_FILES['image3']['size'];
		
				$imgExt = strtolower(pathinfo($imgName1, PATHINFO_EXTENSION));
		
					$allowExt  = array('jpeg', 'jpg', 'png', 'gif');
		
					$userPic3 = time().'_'.rand(1000,9999).'.'.$imgExt;
		
					if(in_array($imgExt, $allowExt)){
		
						if($imgSize3 < 5000000){
							move_uploaded_file($imgTmp3 ,$upload_dir.$userPic3);
						}else{
							$errorMsg = 'Image too large';
						}
					}else{
						$errorMsg = 'Please select a valid image';
					}



		if(!isset($errorMsg)){
			$sql = "insert into p_status(name, email, contact, address, qualifi, speciali, experience, symptoms, keywords, image, image1, image2, image3)
					values('".$name."', '".$email."', '".$contact."', '".$address."', '".$qualifi."', '".$speciali."', '".$experience."', '".$symptoms."', '".$keywords."', '".$userPic."', '".$userPic1."', '".$userPic2."', '".$userPic3."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: profile.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
