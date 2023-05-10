<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="logo">
    <img src="icon1.PNG" width="250px"alt="">
    </div>
                    
	<div class="container">
		<h2>Register</h2>
		<form method="post" action="register.php">
        <div class="form-group">
				<label for="firstname">Firstname:</label>
				<input type="text" class="form-control" name="firstname" required>
			

				<label for="lastname">Lastname:</label>
				<input type="text" class="form-control" name="lastname" required>
			
           
				<label for="email">Email:</label>
				<input type="text" class="form-control" name="email" required>
		
    
				<label for="username">Username:</label>
				<input type="text" class="form-control" name="username" required>

			
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" required>
			</div>

			<input type="submit" name="submit" value="Register" class="btn btn-primary">
		</form>

			<?php
			if (isset($_POST['submit'])) {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$username = $_POST['username'];
				$password = $_POST['password'];
			


				// Connect to database
				$db = mysqli_connect('4307014_aromatherapybyvee', '4307014_aromatherapybyvee', 'veronica4321', '4307014_aromatherapybyvee');

				// Check if username already exists
				$query = "SELECT * FROM users WHERE username='$username'";
				$result = mysqli_query($db, $query);

				if (mysqli_num_rows($result) > 0) {
					echo "<div class='alert alert-danger' role='alert'>Username already exists. Please choose another one.</div>";
				} else {
					// Insert new user into database
					$query = "INSERT INTO users (firstname,lastname,email,username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
					mysqli_query($db, $query);
					mysqli_close($db);
					header("Location:login.php");
					exit;
				}
			}
		?>
	</div>
		</body>
		</html>

	