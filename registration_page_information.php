<?php

	$link=mysqli_connect('localhost','root','','petsoft');
	if($link==TRUE){
		echo "Connected Successfully";
	}
	else{
		echo "Not Connected";
	}



	$name=$_POST['name'];
	$ph=$_POST['phno'];
	$password=$_POST['password'];
	$mail=$_POST['mail'];
	$address=$_POST['address'];
    $user_type=$_POST['user'];
    $centre_code = $_POST['centre'];
	$select = "insert into registration_details values('$name','$centre_code','$user_type','$address','$ph','$mail','$password');";
	$result=mysqli_query($link,$select);
	if($result==TRUE){
		header("location:login.php");
		echo"Inserted Successfully";
	}
	else{
		echo "Not inserted";
	}
?>	
