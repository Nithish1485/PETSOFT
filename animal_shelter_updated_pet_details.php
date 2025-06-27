<?php

$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link == TRUE) {
    $updatedspecies = isset($_POST['species']) ? mysqli_real_escape_string($link, $_POST['species']) : '';
    $updatedbreed = isset($_POST['breed']) ? mysqli_real_escape_string($link, $_POST['breed']) : '';
    $updatedcolour = isset($_POST['colour']) ? mysqli_real_escape_string($link, $_POST['colour']) : '';
    $updatedcount = isset($_POST['count']) ? mysqli_real_escape_string($link, $_POST['count']) : '';
    $updatedprice = isset($_POST['price']) ? mysqli_real_escape_string($link, $_POST['price']) : '';

    // Check if a record with the specified combination exists
    $check_query = "SELECT * FROM pet_inventory_details WHERE species='$updatedspecies' AND breed='$updatedbreed' AND colour='$updatedcolour'";
    $check_result = mysqli_query($link, $check_query);

    if ($check_result && mysqli_num_rows($check_result) > 0) {
        // Record found, update count and price
        $update_query = "UPDATE pet_inventory_details SET count_of_pets='$updatedcount', price='$updatedprice' WHERE species='$updatedspecies' AND breed='$updatedbreed' AND colour='$updatedcolour'";

        if (mysqli_query($link, $update_query)) {
            header("location:animal_shelter_owner.php");
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
    } else {
        echo "Record not found for the specified combination.";
    }

    mysqli_free_result($check_result);
    mysqli_close($link);
} else {
    echo "Connection Failed";
}
?>
