<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link === FALSE) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Get customer_id from the URL
$customer_id = mysqli_real_escape_string($link, $_GET['customer_id']);

// Check if customer_id is not empty and is a valid integer
if (empty($customer_id) || !ctype_digit($customer_id)) {
    die("Invalid customer ID");
}

$appointment_date = mysqli_real_escape_string($link, $_POST['date']);
$petid = mysqli_real_escape_string($link, $_POST['petid']);
$appointment_time = mysqli_real_escape_string($link, $_POST['time']);

// Retrieve customer details
$select_customer = "SELECT fname, phonenumber FROM customer_details WHERE customer_id='$customer_id'";
$result_customer = mysqli_query($link, $select_customer);

if ($result_customer && mysqli_num_rows($result_customer) > 0) {
    $row_customer = mysqli_fetch_assoc($result_customer);
    $name = mysqli_real_escape_string($link, $row_customer['fname']);
    $phone_number = mysqli_real_escape_string($link, $row_customer['phonenumber']);
} else {
    die("Customer not found");
}

$centre_code = '2';

// Format date and time properly for MySQL
$appointment_date = date('Y-m-d', strtotime($appointment_date));
$appointment_time = date('H:i:s', strtotime($appointment_time));

$insert = "INSERT INTO appointment_details (customer_id, pet_id, name, phone_number, appointment_date, appointment_time, centre_code) VALUES ($customer_id, $petid, '$name', '$phone_number', '$appointment_date', '$appointment_time', '$centre_code')";

$result3 = mysqli_query($link, $insert);

if ($result3 === TRUE) {
    header("location: customer_homepage.php?customer_id=$customer_id");
} else {
    echo "Error: " . mysqli_error($link);
}

mysqli_close($link);
?>
