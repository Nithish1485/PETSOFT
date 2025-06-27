<?php
    $link = mysqli_connect("localhost", "root", "", "petsoft");

    if ($link == TRUE) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mail = $_POST['mail'];
        $petid = $_POST['petid'];
        $phno = $_POST['phno'];
        $address = $_POST['address'];

        $insert = "INSERT INTO customer_details (fname, lname, email, phone_no, pet_id, address) VALUES ('$fname', '$lname', '$mail', '$phno', '$petid', '$address')";

        $result = mysqli_query($link, $insert);

        if ($result == TRUE) {
            // Get the generated customer ID
            $customer_id = mysqli_insert_id($link);

            // Redirect to the next page with customer ID in the URL
            header("location: enter_customer_id.php?customer_id=$customer_id");
            exit();
        } else {
            echo "Error: " . mysqli_error($link);
        }

        mysqli_close($link);
    }
?>
