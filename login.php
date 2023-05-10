<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="logo">
   <img src="icon1.PNG" width="250px"alt="">
 </div>


	<div class="container mt-5">
		<h2 class="text-center mb-4">Login</h2>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form method="post" action="login.php">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" name="username" required>
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
				</form>
            
			 <?php
					if (isset($_POST['submit'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];

						// Connect to database
						$db = mysqli_connect('4307014_aromatherapybyvee', '4307014_aromatherapybyvee', 'veronica4321', '4307014_aromatherapybyvee');

						// Check if username and password match
						$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
						$result = mysqli_query($db, $query);

						if (mysqli_num_rows($result) > 0) {
							// Login successful, redirect to home.php
							header("Location: completesite.php");
							exit;
						} else {
							echo "<div class='alert alert-danger mt-4'>Invalid username or password.</div>";
						}
					}
				?>
			</div>
		</div>
	</div>

</body>
</html>
