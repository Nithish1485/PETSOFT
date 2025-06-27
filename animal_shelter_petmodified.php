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
			
		</style>
<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming species, breed, and colour together uniquely identify a row
    $species = mysqli_real_escape_string($link, $_POST['species']);
    $breed = mysqli_real_escape_string($link, $_POST['breed']);
    $colour = mysqli_real_escape_string($link, $_POST['colour']);

    echo '<body><form action="animal_shelter_updated_pet_details.php" method="POST">';

    echo '<input type="hidden" name="species" value="' . $species . '">';
    echo '<input type="hidden" name="breed" value="' . $breed . '">';
    echo '<h2>Modify Pet Details</h2><input type="hidden" name="colour" value="' . $colour . '">';

    echo '<label>Enter Count:</label><input type="number" name="count"></input><br>';
    echo '<label>Enter Price:</label><input type="number" name="price"></input><br>';
    
    echo '<input type="submit" value="update"></input><br>';
    
    echo '</form></body>';
}

mysqli_close($link);
?>
