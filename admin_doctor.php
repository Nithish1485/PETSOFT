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
		$select="select * from doctor_details;";

		$result=mysqli_query($link,$select);

		echo "<h2>DOCTOR DETAILS</h2>";

		if(mysqli_num_rows($result)>0){
			echo "<table><tr><th>Doctor Id</th><th>Name</th><th>Gender</th><th>Age</th><th>Doctor Type</th><th>Specialization</th>	</tr>";
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row['doctor_id']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['age']."</td><td>".				$row['doctor_type']."</td><td>".$row['specialization']."</td></tr>";
			}
		echo"</table>";
		}
	}
?>	