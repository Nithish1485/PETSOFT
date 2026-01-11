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

        h2 {
            color: #333;
            text-align: center;
            text-decoration: underline;
        }

        form {
            width: 400px;
            margin: 50px auto;
            background-color: rgba(255,255,255,0.3);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        select {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>

    <script>
        function validateDoctorForm() {
            const name = document.getElementById("name").value.trim();
            const gender = document.getElementById("gender").value;
            const age = document.getElementById("age").value;
            const type = document.getElementById("type").value.trim();
            const specialization = document.getElementById("specialization").value.trim();
            const errorDiv = document.getElementById("error-message");

            errorDiv.innerText = "";

            if (!name || !gender || !age || !type || !specialization) {
                errorDiv.innerText = "All fields are required.";
                return false;
            }

            if (age < 21 || age > 80) {
                errorDiv.innerText = "Age must be between 21 and 80.";
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <!-- Added basic client-side validation to improve data integrity -->
    <form action="adding_doctors.php" method="POST" onsubmit="return validateDoctorForm();">
        <h2>Add new doctor</h2>

        <div id="error-message" class="error"></div>

        <label for="name">Enter Doctor Name:</label>
        <input type="text" id="name" name="name" maxlength="50" placeholder="Dr. John Doe">

        <label for="gender">Enter gender:</label>
        <select id="gender" name="gender">
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>

        <label for="age">Enter Age:</label>
        <input type="number" id="age" name="age" min="21" max="80">

        <label for="type">Enter Doctor Type:</label>
        <input type="text" id="type" name="type" maxlength="50">

        <label for="specialization">Enter Specialization:</label>
        <input type="text" id="specialization" name="specialization" maxlength="50">

        <input type="submit" value="Add Doctor">
    </form>
</body>
</html>
