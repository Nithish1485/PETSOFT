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
			input[type="date"]{
				width: 93%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
				margin-bottom: 15px;
			}

			select {
				width: 98%;
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
		<form action = "appointment_details.php" method="POST">
		<h2>Book Appointment</h2>
		<label>Enter Your Customer- ID:</label>
		<input type="number" name="custid" required></input><br>
		<label>Enter Your Pet-ID:</label>
		<input type="number" name="petid" required></input><br>
		<label>Choose Prefered Date:</label>
		<input type="date" name="date" required></input><br>
		<label>Select Prefered Timing:</label>
		<select id="time" name="time">
			<option value="10:00">10:00</option>
			<option value="10:30">10:30</option>
			<option value="11:00">11:00</option>
			<option value="11:30">11:30</option>
			<option value="12:00">12:00</option>
			<option value="12:30">12:30</option>
		</select>
		<br>
		<label>Choose prefered Doctor ID:</label>
		<select id="doctor" name="doctor">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		<br>
		<input type="submit" value="book"></input>
		</form>
	</body>
</html>