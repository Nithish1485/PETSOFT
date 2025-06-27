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
				background-color: rgba(255, 255, 255, 0.5);
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
            h1{
                text-align: center;
            }
		</style>
	</head>
	<body>
        <h1>PETSOFT</h1>
		<form action="registration_page_information.php" method="POST">
            <h2>Sign-up Form</h2>
			<label for="petType">Select Type Of User:</label>
			<select name="user">
				<option value="Owner">Owner</option>
				<option value="Admin">Admin</option>
				<option value="Customer">Customer</option>
			</select><br>
			<label for="centre">Select Type Of Centre:</label>
			<select name="centre">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select><br>

			<label for="name">Enter Name: </label><input type="text" name="name" required><br>
			<label for="phno">Enter Phone Number: </label><input type="text" name="phno" maxlength="10" required><br>
			<label for="mail">Enter Mail-ID: </label><input type="email" name="mail" required><br>
			<label for="password">Enter Password: </label><input type="password" name="password" required><br>
			<label for="address">Enter Address:</label><input type="text" name="address" required><br>
			<input type="submit" value="Register">
		</form>
	</body>
</html>