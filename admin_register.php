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
		$select="select * from registration_details;";

		$result=mysqli_query($link,$select);

		echo "<h2>USER DETAILS</h2>";

		if(mysqli_num_rows($result)>0){
			echo "<table><tr><th>User Type</th><th>Centre Code</th><th>Name</th><th>Phone Number</th><th>MailID</th><th>Address</th>	</tr>";
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row['user_type']."</td><td>".$row['centre_code']."</td><td>".$row['name']."</td><td>".							$row['phone_number']."</td><td>".$row['mail_id']."</td><td>".$row['address']."</td></tr>";
			}
		echo"</table>";
		}
	}
?>	