<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Animal Booking</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .booking-form {
            display: none;
        }
        body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
                background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
                background-repeat: no-repeat;
                background-size: cover;
                
			}
        #up{
            width: 300px;
				margin: 0 auto;
				padding: 20px;
				background-color: rgba(255, 255, 255, 0.5);
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
			h2 {
				color: #333;
				text-align: center;
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

			input[type="number"],
			input[type="date"] {
				width: 93%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
                margin-bottom: 15px;
			}

            button{
                padding: 10px;
				background-color: #4CAF50;
				color: #fff;
				border: none;
				border-radius: 3px;
				cursor: pointer;
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

			p {
				text-align: center;
				margin-top: 10px;
				color: #666;
			}

			a {
				color: #4CAF50;
				text-decoration: none;
			}
			a:hover {
				text-decoration: underline;
			}

            h1{
                text-align: center;
            }
    </style>
    <script>
        function showBookingForm() {
            document.getElementById('booking-form').style.display = 'block';
        }
    </script>
</head>

<body>
    <div class="booking-container">
        <?php
        if (isset($_GET['species']) && isset($_GET['breed']) && isset($_GET['color'])) {
            $species = htmlspecialchars($_GET['species']);
            $breed = htmlspecialchars($_GET['breed']);
            $color = htmlspecialchars($_GET['color']);

            echo "<div id='up'><h2>Booking for $species</h2>";
            echo "<p>Breed: $breed</p>";
            echo "<p>Color: $color</p>";

            echo "<center><button onclick='showBookingForm()'>Book Now</button></center></div>";
            echo "<div class='booking-form' id='booking-form'>";
            echo "<form method='POST' action=''>";
            echo "<label for='customer_id'>Customer ID:</label>";
            echo "<input type='number' name='customer_id' required><br>";
            echo "<label for='date'>Booking Date:</label>";
            echo "<input type='date' name='date' required><br>";
            echo "<input type='submit' value='Confirm Booking'>";
            echo "</form>";
            echo "</div>";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Assume you have a database connection
                $link = mysqli_connect("localhost", "root", "", "petsoft");

                if ($link === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                // Fetch customer_id and date from the form
                $customer_id = mysqli_real_escape_string($link, $_POST['customer_id']);
                $date = mysqli_real_escape_string($link, $_POST['date']);

                // Insert data into adoption_details table
                $insert_query = "INSERT INTO adoption_details (customer_id, species, breed, colour, date) VALUES ('$customer_id', '$species', '$breed', '$color', '$date')";

                if (mysqli_query($link, $insert_query)) {
                    echo "<p>Booking details recorded successfully.</p>";

                    // Decrease count_of_pets by 1 in pet_inventory_details
                    $update_count_query = "UPDATE pet_inventory_details SET count_of_pets = count_of_pets - 1 WHERE species = '$species' AND breed = '$breed' AND colour = '$color'";

                    if (!mysqli_query($link, $update_count_query)) {
                        echo "<p>Error updating pet count: " . mysqli_error($link) . "</p>";
                    }
                } else {
                    echo "<p>Error recording booking details: " . mysqli_error($link) . "</p>";
                }

                mysqli_close($link);
            }
        } else {
            echo "<p>No animal selected for booking.</p>";
        }
        ?>
    </div>
</body>

</html>
