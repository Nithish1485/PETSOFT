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
		}
    </style>
<?php

	$link=mysqli_connect("localhost","root","","petsoft");
	if($link==TRUE){
		$select="select * from centre_details;";

		$result=mysqli_query($link,$select);


		echo "<h2><u>CENTRE DETAILS</u><h2>";

		if(mysqli_num_rows($result)>0){
			echo "<table><tr><th>Centre Code</th><th>Centre Type</th><th>Centre Phone Number</th></tr>";
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row['centre_code']."</td><td>".$row['centre_type']."</td><td>".$row['contact_no']."</td></tr>";
			}
		echo"</table>";
		}
	}
?>	