<?php

	$link=mysqli_connect("localhost","root","","petsoft");

	if($link==TRUE){
		
			$doctor_id=$_POST['doctor_id'];
		        $updatedname = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
    			$updatedgender = isset($_POST['gender']) ? mysqli_real_escape_string($link, $_POST['gender']) : '';
			$updatedtype = isset($_POST['type']) ? mysqli_real_escape_string($link, $_POST['type']) : '';
    			$updatedage = isset($_POST['age']) ? mysqli_real_escape_string($link, $_POST['age']) : '';
    			$updatedspecialization = isset($_POST['specialization']) ? mysqli_real_escape_string($link, $_POST['specialization']) : '';


		$update="update doctor_details set name='$updatedname', gender='$updatedgender',age='$updatedage' , doctor_type='$updatedtype',specialization='$updatedspecialization' where doctor_id='$doctor_id';";

		//$result=$mysqli_query($link,$update);

		if(mysqli_query($link,$update)==TRUE){
			header("location:doctors.php?centre=1");
		}
		else{
			header("location:doctors.php?centre=1");
		}
	}

	else{
		echo "Connection Failed";
	}
?>
