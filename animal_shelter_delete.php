<!DOCTYPE HTML>
<html>

<head>
    <title>petsoft.com</title>
    <style>
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

        tr:nth-child(even) {
            background-color: #f9f9f9;
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
                <th>Species</th>
                <th>Breed</th>
                <th>Colour</th>
                <th>Count</th>
                <th>Gender</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $link = mysqli_connect("localhost", "root", "", "petsoft");

            if ($link === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $result = mysqli_query($link, "SELECT * FROM pet_inventory_details");

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['species'] . "</td>";
                echo "<td>" . $row['breed'] . "</td>";
                echo "<td>" . $row['colour'] . "</td>";
                echo "<td>" . $row['count_of_pets'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>
                        <form method='post' action='animal_shelter_petdeleted.php'>
                            <input type='hidden' name='species' value='" . $row['species'] . "'>
                            <input type='hidden' name='breed' value='" . $row['breed'] . "'>
                            <input type='hidden' name='colour' value='" . $row['colour'] . "'>
                            <input type='submit' value='Delete'>
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
