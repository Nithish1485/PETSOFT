<?php
	
	$link=mysqli_connect("localhost","root","","petsoft");
		
	if($link==TRUE){

		$species=$_POST['species'];
		$breed=$_POST['breed'];
		$colour=$_POST['colour'];
		$count=$_POST['count'];
		$gender=$_POST['gender'];
		$price=$_POST['price'];


		$insert="insert into pet_inventory_details (species,breed,colour,count_of_pets,gender,price) values ('$species','$breed','$colour',$count,'$gender',$price);";

		$result=mysqli_query($link,$insert);

		if($result==TRUE){
			header("location:animal_shelter_add.php");
		}
	}
?>