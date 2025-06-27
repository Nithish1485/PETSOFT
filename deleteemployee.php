<!DOCTYPE HTML>
<html>

<head>
    <title>petsoft.com</title>
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
            background-color: rgba(255,255,255,0.5);
        }

       
        tr:hover {
            background-color: #ddd;
        }

        input[type="submit"] {
				width: 100%;
				padding: 10px;
				background-color: #4CAF50;
				color: #fff;
				border: none;
				border-radius: 3px;
				cursor: pointer;
			}
    </style>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Employee Type</th>
                <th>Age</th>
                <th>Hours Worked</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $link = mysqli_connect("localhost", "root", "", "petsoft");

            if ($link === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $centreCode = isset($_GET['centre']) ? $_GET['centre'] : '';
            $result = mysqli_query($link, "SELECT * FROM employee_details WHERE centre_code='$centreCode'");

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<body><tr>";
                echo "<td>" . $row['employee_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['hours_worked'] . "</td>";
                echo "<td>" . $row['sal'] . "</td>";
                echo "<td>
                        <form method='post' action='employeedeleted.php'>
                            <input type='hidden' name='employee_id' value='" . $row['employee_id'] . "'>
                            <input type='submit' value='Delete'>
                        </form>
                      </td>";

                echo "</tr></body>";
            }

            mysqli_close($link);
            ?>
        </tbody>
    </table>

</body>

</html>