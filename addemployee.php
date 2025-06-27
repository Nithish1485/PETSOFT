<?php
$centreCode = isset($_GET['centre']) ? $_GET['centre'] : '';

?>
<!DOCTYPE HTML>
	<html>
		<head>
			<title>petsoft.com</title>
			<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
				margin: 0;
				padding: 0;
                background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
                background-repeat: no-repeat;
                background-size: cover;
			}
            
            h2{
                color: #333;
				text-align: center;
				text-decoration: underline;
            }
			form {
				width: 400px;
				margin: 50px auto;
				background-color: rgba(255,255,255,0.3);
				padding: 20px;
				border-radius: 5px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}

			label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
			}

			input[type="text"],
			input[type="number"],
			input[type="email"],
			input[type="password"] {
				width: 93%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
				margin-bottom: 15px;
			}

			select {
				width: 100%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
				margin-bottom: 15px;
			}

			input[type="submit"] {
				background-color: #4CAF50;
				color: #fff;
				border: none;
				padding: 10px 20px;
				border-radius: 3px;
				cursor: pointer;
			}

			input[type="submit"]:hover {
				background-color: #45a049;
			}
		</style>
		</head>
	
		<body>
			<form action="adding_employee.php" method="POST">
				<h2>Add new employee</h2>
				<input type="hidden" name="centre" value="<?php echo $centreCode; ?>">
				<label>Enter Employee Name:</label>
				<input type="text" name="name"></input><br>
				<label>Enter Employee Type:</label>
				<input type="text" name="type"></input><br>
				<label>Enter Age:</label>
				<input type="number" name="age"></input><br>
				<label>Enter Hours Worked:</label>
				<input type="number" name="hours"></input><br>
				<label>Enter Salary:</label>
				<input type="number" name="salary"></input><br>
				<input type="submit" value="Add Employee"></input><br>
			</form>
		</body>
	</html>

