<!DOCTYPE HTML>
<html>
    <head>
        <title>petsoft.com</title>
        <style>
        body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
				margin: 0;
				padding: 0;
				background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
				background-repeat: no-repeat;
				background-size: cover;
			}

			/* Form Styles */
			form {
				width: 350px;
				margin: 50px auto;
				background-color: rgba(255, 255, 255, 0.3);
				padding: 20px;
				border-radius: 5px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}

			/* Button Styles */
			input[type="button"] {
				padding: 10px 20px;
				font-size: 16px;
				background-color: #4CAF50;
				color: white;
				border: none;
				cursor: pointer;
				margin-bottom: 10px;
				width: 150px;
				border-radius: 5px;
			}

			input[type="button"]:hover {
				background-color: #45a049;
			}

			/* Title Styles */
			h2 {
				text-align: center;
				color: #333;
				text-decoration: underline;
				padding-bottom: 10px;
			}

			label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
			}
        </style>
    </head>

    <body>
        <form>
            <center>
            <h2>Pet Inventory Management</h2>
            <label>Add a new pet detail:</label>
            <input type="button" onclick="add()" value="Add"></input><br>
            <label>Delete a pet detail:</label>
            <input type="button" onclick="deleteRecord()" value="Delete"></input><br>
            <label>Modify a pet details:</label>
            <input type="button" onclick="modify()" value="Modify"></input><br>
            </center>
        </form>

        <script>
            function add() {
                window.location.href = "animal_shelter_add.php";
            }

            function deleteRecord() {
                window.location.href = "animal_shelter_delete.php";
            }

            function modify() {
                window.location.href = "animal_shelter_modify.php";
            }
        </script>
    </body>
</html>
