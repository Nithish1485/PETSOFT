<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $species = mysqli_real_escape_string($link, $_POST['species']);
    $breed = mysqli_real_escape_string($link, $_POST['breed']);
    $colour = mysqli_real_escape_string($link, $_POST['colour']);

    $delete_query = "DELETE FROM pet_inventory_details WHERE species = '$species' AND breed = '$breed' AND colour = '$colour'";

    if (mysqli_query($link, $delete_query)) {
        header("location: animal_shelter_owner.php");
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
