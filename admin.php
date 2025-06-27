<!DOCTYPE HTML>
	<html>
		<head>
			<title>petsoft.com</title>
		</head>
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
				width: 300px;
				margin: 50px auto;
				background-color: rgba(255,255,255,0.3);
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
				width: 150px;
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
		<body>
			<form>
				<center>
				<h2>Admin Form</h2>
				<label>View Centre Details:</label>
				<input type="button" onclick="centre()" value="View">
				<label>View Employee Details:</label>
				<input type="button" onclick="employee()" value="View">
				<label>View Doctor Details:</label>
				<input type="button" onclick="doctor()" value="View">
				<label>View Pet Details:</label>
				<input type="button" onclick="pet()" value="View">
				<label>View User Details:</label>
				<input type="button" onclick="register()" value="View">
				<label>View Customer Details:</label>
				<input type="button" onclick="customer()" value="View">
				</center>
			</form>
		</body>

		<script>
			
			function centre(){
				window.location.href="admin_centres.php";
			}

			function employee(){
				window.location.href="admin_employee.php";
			}

			function doctor(){
				window.location.href="admin_doctor.php";
			}

			function pet(){
				window.location.href="admin_pet.php";
			}

			function register(){
				window.location.href="admin_register.php";
			}

			function customer(){
				window.location.href="admin_customer.php";
			}

		</script>
	</html>
				