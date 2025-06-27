<style>
	body{
            background-color: lightblue;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }


        tr:hover {
            background-color: #ddd;
        }

		h2{
			text-decoration: underline;
			text-align: center;
		}
    </style>
<?php
	$link = mysqli_connect("localhost", "root", "", "petsoft");

	if ($link == TRUE) {
		$select = "SELECT * FROM doctor_details;";
		
		$result = mysqli_query($link, $select);

		echo "<h2>DOCTOR DETAILS</h2>";

		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr><th>Doctor Id</th><th>Name</th><th>Gender</th><th>Age</th><th>Doctor Type</th><th>Specialization</th></tr>";

			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row['doctor_id']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['age']."</td><td>".$row['doctor_type']."</td><td>".$row['specialization']."</td></tr>";
			}

			echo "</table>";
		} else {
			echo "No records found";
		}

		echo "</body>";
		echo "</html>";

		mysqli_close($link);
	}
?>
