<?php
    $link = mysqli_connect("localhost", "root", "", "petsoft");
    if ($link == TRUE) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        // Check if the mail and password match
        $password_check = "SELECT password FROM registration_details WHERE mail_id='$mail';";
        $result = mysqli_query($link, $password_check);
        if ($result == TRUE) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $stored_password = $row['password'];
                    
                    if ($password == $stored_password) {
                        // Get the user type
                        $user_type_query = "SELECT user_type FROM registration_details WHERE mail_id='$mail' AND password='$password';";
                        $user_type_result = mysqli_query($link, $user_type_query);

                        $centre_code_query = "SELECT centre_code FROM registration_details WHERE mail_id='$mail' AND password='$password';";
                        $centre_code = mysqli_query($link, $centre_code_query);

                        if ($user_type_result == TRUE && mysqli_num_rows($user_type_result) > 0) {
                            $user_type_row = mysqli_fetch_assoc($user_type_result);
                            $user_type = $user_type_row['user_type'];

                            // Redirect based on user type
                            if ($user_type == "Admin") {
                                header("location: admin.php");
                                exit();
                            } else if ($user_type == "Customer") {
                                header("location: customer.php");
                                exit();
                            } else if ($user_type == "Owner") {
                                    $centre_code_result = mysqli_fetch_assoc($centre_code);
                                    $centre_code_value = $centre_code_result['centre_code'];
                                    if($centre_code_value==1){
                                        header("location: owner_features.php?centre=$centre_code_value");
                                    }
                                    else if($centre_code_value==2){
                                        header("location: animal_shelter_owner.php?centre=$centre_code_value");
                                    }
                                    exit();
                            }
                        } else {
                            echo "<script>alert('Invalid user type')</script>";
                        }
                    } else {
                        echo "<script>alert('Incorrect Mail-ID/Password')</script>";
                    }
                }
            } else {
                echo "<script>alert('No user found with the given Mail-ID')</script>";
            }
        } else {
            echo "<script>alert('Error in password check query')</script>";
        }
    } else {
        echo "Not Connected";
    }
?>
