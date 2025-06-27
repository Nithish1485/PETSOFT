<?php
	
	$link=mysqli_connect("localhost","root","","petsoft");
	
	if($link==TRUE){
		
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$specialization=$_POST['specialization'];
		$type=$_POST['type'];

		$insert="insert into doctor_details (name,gender,age,specialization,doctor_type) values('$name','$gender',$age,'$specialization','$type');";

		$result=mysqli_query($link,$insert);

		if($result==TRUE){

			header("location:doctors.php?centre=1");
		}
		else{
			header("location:doctors.php?centre=1");
		}
	}
?>