<?php
	
	$link=mysqli_connect("localhost","root","","petsoft");
	
	if($link==TRUE){
		$centreCode = $_POST['centre'];
		$name=$_POST['name'];
		$type=$_POST['type'];
		$age=$_POST['age'];
	//	$centre_code=$_POST['centre_code'];
		$hours_worked=$_POST['hours'];
		$salary=$_POST['salary'];

		$insert="insert into employee_details (name,type,age,centre_code,hours_worked,sal) VALUES ('$name','$type','$age','$centreCode','$hours_worked','$salary');";

		$result=mysqli_query($link,$insert);

		if($result==TRUE){

			header("location:employees.php?centre=1");
		}
		else{
			header("location:employees.php?centre=1");
		}
	}
?>