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
			input[type="number"]{
				width: 95%;
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
				width: 100%;
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
			<form action="adding_animal_shelter_animals.php" method="POST">
				<h2>Add Pet Details</h2>
				<label>Enter Species:</label>
				<input type="text" name="species"></input><br>
				<label>Enter Breed:</label>
				<input type="text" name="breed"></input><br>
				<label>Enter Colour:</label>
				<input type="text" name="colour"></input><br>
				<label>Select Gender:</label>
				<select name="gender">
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select><br>
				<label>Enter Count:</label>
				<input type="number" name="count"></input><br>
				<label>Enter Price:</label>
				<input type="number" name="price"></input><br>

				<input type="submit" value="Add Pet"><br>
			</form>
		</body>
	</html>