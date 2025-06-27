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
				width: 93%;
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

		</style>
<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = mysqli_real_escape_string($link, $_POST['employee_id']);

	echo '<body><form action="updated_employee_details.php" method="POST">';

	echo '<h2>Update employee</h2><input type="hidden" name="employee_id" value="' . $employee_id . '">';
	echo '<label>Enter Name:</label><input type="text" name="name"></input><br>';
	echo '<label>Enter Type:</label><input type="text" name="type"></input><br>';
	echo '<label>Enter Age:</label><input type="number" name="age"></input><br>';
	echo '<label>Enter Working Hours:</label><input type="number" name="hours"></input><br>';
	echo '<label>Enter Salary:</label><input type="number" name="sal"></input><br>';
	echo '<input type="submit" value="update"></input><br>';
	
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
