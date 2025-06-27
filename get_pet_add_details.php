<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect("localhost", "root", "", "petsoft");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $name = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
    $gender = isset($_POST['gender']) ? mysqli_real_escape_string($link, $_POST['gender']) : '';
    $species = isset($_POST['species']) ? mysqli_real_escape_string($link, $_POST['species']) : '';
    $age = isset($_POST['age']) ? mysqli_real_escape_string($link, $_POST['age']) : '';
    $breed = isset($_POST['breed']) ? mysqli_real_escape_string($link, $_POST['breed']) : '';
    $colour = isset($_POST['colour']) ? mysqli_real_escape_string($link, $_POST['colour']) : '';
    $centre_code = $_POST['centre'];

    // Check if any of the required fields are empty
    if (empty($name) || empty($gender) || empty($species) || empty($age) || empty($breed) || empty($colour)) {
        echo "<script>alert('Please fill in all the fields.')</script>";
    } else {
        $insert = "INSERT INTO pet_details (name, gender, species, breed, age, centre_code, color) VALUES ('$name', '$gender', '$species', '$breed', '$age', '$centre_code', '$colour')";

        $result = mysqli_query($link, $insert);

        if ($result === true) {
            echo "<script>alert('New Pet Successfully Added')</script>";
            header("location: pet_details.php?centre=1");
        } else {
            echo "<script>alert('Unsuccessful: " . mysqli_error($link) . "')</script>";
        }
    }

    mysqli_close($link);
}
?>

		
		