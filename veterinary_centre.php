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

			/* Form Styles */
			form {
				width: 350px;
				margin: 50px auto;
				background-color: rgba(255, 255, 255, 0.3);
				padding: 20px;
				border-radius: 5px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}

			/* Button Styles */
			input[type="button"] {
				padding: 10px 20px;
				font-size: 16px;
				background-color: #4CAF50;
				color: white;
				border: none;
				cursor: pointer;
				margin-bottom: 10px;
				width: 100px;
				border-radius: 5px;
			}

			input[type="button"]:hover {
				background-color: #45a049;
			}

			/* Title Styles */
			h2 {
				text-align: center;
				color: #333;
				text-decoration: underline;
				padding-bottom: 10px;
			}

			label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
			}

		</style>
		</head>

		<body>
			<form>
				<center>
				<h2>Veterinary Centre</h2>
				<label>View Doctors:</label>
				<input type="button" onclick="view_doctors()" value="View"><br><br>
				<label>Book Appointments:</label>
				<input type="button" onclick ="book_appointments()" value="Book">
				</center>
			</form>

		</body>
		
		<script>
			function view_doctors(){
				window.location.href="view_doctors.php";
			}

			function book_appointments(){
				window.location.href="book_appointments.php";
			}

		</script>
	</html> 
			