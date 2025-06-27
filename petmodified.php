<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
                background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
                background-repeat: no-repeat;
                background-size: cover;
                
			}

			h2 {
				color: #333;
				text-align: center;
				text-decoration: underline;
			}

			form {
				width: 300px;
				margin: 0 auto;
				padding: 20px;
				background-color: rgba(255, 255, 255, 0.5);
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			}

			label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
			}

			input[type="text"],
			input[type="number"] {
				width: 100%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
                margin-bottom: 15px;
			}

			input[type="submit"] {
				width: 100%;
				padding: 10px;
				background-color: #4CAF50;
				color: #fff;
				border: none;
				border-radius: 3px;
				cursor: pointer;
			}
			select {
				width: 100%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
				margin-bottom: 15px;
			}
		</style>
<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = mysqli_real_escape_string($link, $_POST['pet_id']);

	echo '<body><form action="updated_pet_details.php" method="POST">';

	echo '<h2>Update Pet</h2><input type="hidden" name="pet_id" value="' . $pet_id . '">';
	echo '<label>Enter Name:</label><input type="text" name="name"></input><br>';
	echo '<label>Enter Gender:</label><select name="gender"><option value="M">Male</option><option value="F">Female</option></select><br>';
	echo '<label>Enter Species:<input type="text" name="species"></input><br>';
	echo '<label>Enter Breed:</label><input type="text" name="breed"></input><br>';
	echo '<label>Enter Age:</label><input type="number" name="age"></input><br>';
	echo '<label>Enter Colour:</label><input type="text" name="colour"></input><br>';
	echo '<input type="submit" value="Update"></input><br>';
	
	echo '</form></body>';

 //  if (mysqli_query($link, $delete_query)) {
//	header("location:pet_details.php");
  //      echo "Record deleted successfully";
    //} else {
      //  echo "Error deleting record: " . mysqli_error($link);
    //}
}
mysqli_close($link);
?>
