<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = mysqli_real_escape_string($link, $_POST['pet_id']);

    $delete_query = "Delete From pet_details where pet_id = '$pet_id'";

    if (mysqli_query($link, $delete_query)) {
	header("location:pet_details.php?centre=1");
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
