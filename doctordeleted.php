<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = mysqli_real_escape_string($link, $_POST['doctor_id']);

    $delete_query = "Delete From doctor_details where doctor_id = '$doctor_id'";

    if (mysqli_query($link, $delete_query)) {
	header("location:doctors.php?centre=1");
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}
mysqli_close($link);
?>
