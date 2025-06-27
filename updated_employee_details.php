<?php

	$link=mysqli_connect("localhost","root","","petsoft");

	if($link==TRUE){
		
			$employee_id=$_POST['employee_id'];
		        $updatedname = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
    			$updatedtype = isset($_POST['type']) ? mysqli_real_escape_string($link, $_POST['type']) : '';
			$updatedage = isset($_POST['age']) ? mysqli_real_escape_string($link, $_POST['age']) : '';
    			$updatedhours_worked = isset($_POST['hours']) ? mysqli_real_escape_string($link, $_POST['hours']) : '';
    			$updatedsalary = isset($_POST['sal']) ? mysqli_real_escape_string($link, $_POST['sal']) : '';


		$update="update employee_details set name='$updatedname', type='$updatedtype',age='$updatedage' , hours_worked='$updatedhours_worked',sal='$updatedsalary' where employee_id='$employee_id';";

		//$result=$mysqli_query($link,$update);

		if(mysqli_query($link,$update)==TRUE){
			header("location:employees.php?centre=1");
		}
		else{
			header("location:employees.php?centre=1");
		}
	}

	else{
		echo "Connection Failed";
	}
?>
