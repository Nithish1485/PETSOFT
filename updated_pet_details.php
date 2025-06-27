<?php

	$link=mysqli_connect("localhost","root","","petsoft");

	if($link==TRUE){
		
			$pet_id=$_POST['pet_id'];
		        $updatedname = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
    			$updatedgender = isset($_POST['gender']) ? mysqli_real_escape_string($link, $_POST['gender']) : '';
			$updatedspecies = isset($_POST['species']) ? mysqli_real_escape_string($link, $_POST['species']) : '';
    			$updatedage = isset($_POST['age']) ? mysqli_real_escape_string($link, $_POST['age']) : '';
    			$updatedbreed = isset($_POST['breed']) ? mysqli_real_escape_string($link, $_POST['breed']) : '';
    			$updatedcolour = isset($_POST['colour']) ? mysqli_real_escape_string($link, $_POST['colour']) : '';


		$update="update pet_details set name='$updatedname', gender='$updatedgender',species='$updatedspecies',color='$updatedcolour', age='$updatedage' , breed='$updatedbreed' where pet_id='$pet_id';";

		//$result=$mysqli_query($link,$update);

		if(mysqli_query($link,$update)==TRUE){
			header("location:pet_details.php?centre=1");
		}
		else{
			header("location:modifypet.php");
		}
	}

	else{
		echo "Connection Failed";
	}
?>