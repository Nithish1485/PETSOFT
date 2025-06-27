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
			}

			form {
				width: 300px;
				margin: 0 auto;
				padding: 20px;
				background-color: rgba(255, 255, 255, 0.5);
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			}

			label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
			}

			input[type="email"],
			input[type="password"] {
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

			p {
				text-align: center;
				margin-top: 10px;
				color: #666;
			}

			a {
				color: #4CAF50;
				text-decoration: none;
			}
			a:hover {
				text-decoration: underline;
			}

            h1{
                text-align: center;
            }
		</style>
	</head>

	<body>
        <h1>PETSOFT</h1>
		<form action="login_verification.php" method="POST">
            <h2><u>Login page</u></h2>
			<label for="mail">Enter your Mail-ID:</label>
			<input type="email" name="mail" id="mail" required><br>
			<label for="password">Enter your Password:</label>
			<input type="password" name="password" id="password" required><br>
			<input type="submit" value="Login">
            <p>Don't have an account? <a href="registration.php">Sign up</a></p>
		</form>
	</body>
</html>
