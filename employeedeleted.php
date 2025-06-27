<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = mysqli_real_escape_string($link, $_POST['employee_id']);

    $delete_query = "Delete From employee_details where employee_id = '$employee_id'";

    if (mysqli_query($link, $delete_query)) {
	header("location:employees.php?centre=1");
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}
mysqli_close($link);
?>
