<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
		<h2>Login</h2>
	</div>
	
	<!-- User form submission -->
	<div class="content">
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
			
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
			</div>
			
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			
			<div div align="center" class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			
			<p div align="center" >
				Not yet a member? <a href="register.php">Sign up</a>
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