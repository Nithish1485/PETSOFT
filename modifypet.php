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
            background-color: #f2f2f2;
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
                <th>Pet ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Species</th>
                <th>Age</th>
                <th>Breed</th>
                <th>Colour</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $link = mysqli_connect("localhost", "root", "", "petsoft");
            $centreCode = isset($_GET['centre']) ? $_GET['centre'] : '';

            if ($link === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $result = mysqli_query($link, "SELECT * FROM pet_details WHERE centre_code='$centreCode'");

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['pet_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['species'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['breed'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>
                        <form method='post' action='petmodified.php'>
                            <input type='hidden' name='pet_id' value='" . $row['pet_id'] . "'>
                            <input type='submit' value='Modify'>
                        </form>
                      </td>";

                echo "</tr>";
            }

            mysqli_close($link);
            ?>
        </tbody>
    </table>

</body>

</html>
