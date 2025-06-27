<?php
	$link = mysqli_connect("localhost", "root", "", "petsoft");
	
	if ($link == TRUE) {
		$appointment_date = $_POST['date'];
		$petid = $_POST['petid'];
		$appointment_time = $_POST['time'];
		$customer_id = $_POST['custid'];
		$doctor_id=$_POST['doctor'];
		$select1 = "SELECT fname FROM customer_details WHERE customer_id='$customer_id'";
		$result1 = mysqli_query($link, $select1);

		if ($result1 && mysqli_num_rows($result1) > 0) {
			while ($row = mysqli_fetch_assoc($result1)) {
				$name = $row['fname'];
			}
		}

		$select2 = "SELECT phone_no FROM customer_details WHERE customer_id='$customer_id'";
		$result2 = mysqli_query($link, $select2);

		if ($result2 && mysqli_num_rows($result2) > 0) {
			while ($row = mysqli_fetch_assoc($result2)) {
				$phone_number = $row['phone_no'];
			}
		}

		$centre_code = 1;

		// Format date and time properly for MySQL
		$appointment_date = date('Y-m-d', strtotime($appointment_date));
		$appointment_time = date('H:i:s', strtotime($appointment_time));

		$insert = "INSERT INTO appointment_details (customer_id, pet_id, name, phone_number, appointment_date, appointment_time, centre_code,doctor_id) VALUES ($customer_id, $petid, '$name', $phone_number, '$appointment_date', '$appointment_time', $centre_code,$doctor_id)";

		$result3 = mysqli_query($link, $insert);

		if ($result3 == TRUE) {
			header("location: veterinary_centre.php");
		} else {
			echo "Error: " . mysqli_error($link);
		}

		mysqli_close($link);
	}
?>
