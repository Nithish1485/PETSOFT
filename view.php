<style>
    body{
            background-color: lightblue;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th{
			text-align: center;
			border: 1px solid black;
            padding: 8px;
		}
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: rgba(255,255,255,0.5);
        }


        tr:hover {
            background-color: #ddd;
        }

        h2{
			text-align: center;
			text-decoration: underline;
		}
    </style>
<?php
$link = mysqli_connect("localhost", "root", "", "petsoft");

if ($link == TRUE) {
    $customer_id = $_GET['customer_id'];
    $select = "SELECT * FROM appointment_details WHERE customer_id='$customer_id';";
    $result = mysqli_query($link, $select);

    echo "<h2>APPOINTMENT DETAILS</h2>";

    if (!$result) {
        // Display SQL error if any
        echo "Error in SQL query: " . mysqli_error($link);
    } else {
        if (mysqli_num_rows($result) > 0) {
            // Display the data in an HTML table
            echo "<table><tr><th>Customer ID</th><th>Pet ID</th><th>Name</th><th>Appointment Date</th><th>Appointment Timing</th><th>Phone number</th><th>Centre Code</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row['customer_id']."</td><td>".$row['pet_id']."</td><td>".$row['name']."</td><td>".$row['appointment_date']."</td><td>".$row['appointment_time']."</td><td>".$row['phone_number']."</td><td>".$row['centre_code']."</td></tr>";
            }
            echo "</table>";
        } else {
            // Display a message if no rows are found
            echo "No appointment details found for customer ID: $customer_id";
        }
    }

    echo "</body></html>";

    mysqli_close($link);
} else {
    echo "Error connecting to the database: " . mysqli_connect_error();
}
?>
