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

	$link=mysqli_connect("localhost","root","","petsoft");
	if($link==TRUE){
		$select="select * from pet_details;";

		$result=mysqli_query($link,$select);

		echo "<h2>PET DETAILS</h2>";

		if(mysqli_num_rows($result)>0){
			echo "<table><tr><th>Pet Id</th><th>Name</th><th>Gender</th><th>Age</th><th>Species</th><th>Breed</th><th>Colour</th><th>Centre Code</th></tr>";
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row['pet_id']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['age']."</td><td>".$row['species']."</td><td>".$row['breed']."</td><td>".$row['color']."</td><td>".$row['centre_code']."</td></tr>";
			}
		echo"</table>";
		}
	}
?>	