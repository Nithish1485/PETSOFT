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
				width: 160px;
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
				<h2>Customer Form</h2>
				<label>View Veterinary Centre:</label>
				<input type="button" onclick="veterinary_centre()" value="Veterinary Centre"><br><br>
				<label>View Animal Shelter:</label>
				<input type="button" onclick="animal_shelter()" value="Animal Shelter"><br><br>
				<label>View SPA:</label>
				<input type="button" onclick="spa()" value="SPA"><br><br>
				<label>View Appointments:</label>
				<input type="button" onclick="view()" value="Appointments"><br><br>
				</center>
			</form>
		</body>
	

	<script>	
		function veterinary_centre(){
			window.location.href="veterinary_centre.php";
		}

		function animal_shelter(){
			window.location.href="animal_shelter.php";
		}

		function spa(){
			redirectToPage("spa.php");
		}

		function view() {
            redirectToPage("view.php");
        }

        function redirectToPage(page) {
            // Dynamically get the customer_id from PHP
            var customer_id = <?php echo json_encode($_GET['customer_id'] ?? ''); ?>;

            // Redirect to the specified page with customer_id as a query parameter
            window.location.href = page + "?customer_id=" + encodeURIComponent(customer_id);
        }
	</script>

	</html>
				