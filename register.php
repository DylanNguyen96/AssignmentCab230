<?php include('server.php') ?>

<!DOCTYPE html>
<html>
	<head>
	<title>Sign Up</title>
		<!-- Reference to CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	</head>

	<body>
		<!-- Nav bar -->
		<ul>
			<li style="float:right"><a href="login.php">Login</a></li>
			<li style="float:right"><a href="register.php">Register</a></li>
			<li style="float:right"><a href="search.php">Search</a></li>
		</ul>

		<div class="header">
			<!-- Title -->
			<h2>Sign Up</h2>
		</div>
		
		<div class="content">
			<form method="post" action="register.php">
				<?php include('errors.php'); ?>
				
				<div class="input-group">
					<label>First Name</label>
					<input type="text" name="firstName" value="<?php echo $firstName; ?>">
				</div>

				<div class="input-group">
					<label>Last Name</label>
					<input type="text" name="lastName" value="<?php echo $lastName; ?>">
				</div>

				<div class="">
					<label>Date of Birth</label>
					<input type="date" name="dob" value="<?php echo $dob; ?>">
				</div>

				<div class="input-group">
					<label>Postcode</label>
					<input type="text" name="postcode" value="<?php echo $postcode; ?>">
				</div>

				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				
				<div class="input-group">
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				
				<div class="input-group">
					<label>Confirm password</label>
					<input type="password" name="password_2">
				</div>
				
				<div align="center" class="input-group">
					<button type="submit" class="btn" name="reg_user">Register</button>
				</div>
				
				<p align="center">
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>
		</div>
		
		<!-- Footer -->
		<div class="footer">
			<p>
				John Tang | Dylan Nguyen
				<br>
				CAB230 Semester 1 2018
			</p>
		</div>
	</body>
</html>