<!DOCTYPE HTML>
	<html>
		<head>
			<title>petsoft.com</title>
			<style>
				body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
				margin: 0;
				padding: 20px;
				background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
				}

				h2 {
				color: #333;
				text-align: center;
                text-decoration: underline;
				}

				/* Form Styles */
				form {
				width: 350px;
				background-color: #fff;
				margin: 0 auto;
				padding: 20px;
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
				}

				label{
					display: block;
					margin-bottom: 10px;
					font-weight: bold;
				}
				/* Input Styles */
				input[type="text"],
				input[type="number"],
				input[type="email"],
				input[type="password"] {
				width: 93%;
				padding: 10px;
				margin-bottom: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
				}

				/* Submit Button Styles */
				input[type="submit"] {
				background-color: #4CAF50;
				color: #fff;
				padding: 10px 20px;
				border: none;
				border-radius: 3px;
				cursor: pointer;
				}

				p {
				text-align: center;
				margin-top: 10px;
				color: #666;
				}
				/* Link Styles */
				a {
				color: #4CAF50;
				text-decoration: none;
				}

				a:hover {
				text-decoration: underline;
				}
			</style>
		</head>
		
		<body>
			<form action="getting_customerid.php" method="POST">
				<h2>Customer Form</h2>
				<label for="fname">Enter First Name:</label>
				<input type="text" name="fname" required></input><br>
				<label for="lname">Enter Last Name:</label>
				<input type="text" name="lname"></input><br>
				<label for="mail"> Mail ID:</label>
				<input type="email" name="mail" placeholder="Registered Mail ID" required></input><br>
				<label for="petid">Enter Your Pet ID:</petid>
				<input type="number" name="petid" required></input><br>
				<label for="phno">Enter Phone Number:</label>
				<input type="text" name="phno" maxlength="10" required></input><br>
				<label for="address">Enter Address:</label>
				<input type="text" name="address" required></input><br>
				<input type="submit" value="Get ID"></input><br>
				<p>Already Having Customer ID?<a href="enter_customer_id.php">Click Here</a></p><br>
			</form>
		</body>
	</html>