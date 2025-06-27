<!DOCTYPE HTML>
<html>
<head>
    <title>petsoft.com</title>
    <style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
                background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
                background-repeat: no-repeat;
                background-size: cover;
   
			}

			h2 {
				color: #333;
				text-align: center;
                text-decoration: underline;
			}

			form {
				width: 300px;
				margin: 0 auto;
				padding: 20px;
				background-color: #fff;
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			}

			label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
			}

			input[type="email"],
			input[type="number"] {
				width: 93%;
				padding: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
                margin-bottom: 15px;
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
    <form action="customer_verification.php" method="POST">
        <h2>Customer Verification</h2>
        <label>Enter Customer ID:</label>
        <input type="number" name="custid" required><br>
        <label> Mail Id:</label>
        <input type="email" name="mail" required><br>

        <input type="submit" value="Verify">
    </form>
</body>
</html>
