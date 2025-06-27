<?php
    $link = mysqli_connect("localhost", "root", "", "petsoft");
    if ($link == TRUE) {
        $custid = $_POST['custid'];
        $mail = $_POST['mail'];

        $select = "SELECT customer_id FROM customer_details WHERE email='$mail' AND customer_id='$custid'";
        
        $result = mysqli_query($link, $select);
        if (mysqli_num_rows($result) > 0) {
            // Redirect to customer_homepage.php with customer_id in the URL
            header("location:customer_homepage.php?customer_id=$custid");
            exit(); // Ensure script stops executing after redirect
        } else {
            // Handle the case where no match is found
            echo "Invalid customer ID or mail.";
        }

        mysqli_close($link);
    }
?>

		