<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Title -->
		<title>Serach</title>
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
			<h2>Search</h2>
		</div>
		<div class="content">
			<!-- notification message -->
			<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3 align="center">
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
			<?php endif ?>

			<div align="center">
				<!-- logged in user information -->
				<?php  if (isset($_SESSION['username'])) : ?>
					<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
					<p> <a href="search.php?logout='1'" style="color: red;">logout</a> </p>
				<?php endif ?>
			</div>

			<!-- Search Parameters -->
			<form action="searchResults.php" method="GET">
				
				<!-- Location name search -->
				<div class="input-group">
					<label>Location Name</label>
					<input type="text" name="locationNameQuery" placeholder="Search">
				</div>
			</form>

			<form action="searchResults.php" method="GET">
				<hr> 
				<!-- Drop down list for suburb search -->
				<p>Suburb</p>
				<select>
					<option value="pick" name="locationNameQuery"></option>

					<?php
						// connect to the database
						$db = mysqli_connect('localhost', 'root', '', 'registration');
						$sql = mysqli_query($db, "SELECT DISTINCT suburb FROM hotspots ORDER BY suburb ASC;");
						$row = mysqli_num_rows($sql);
						while ($row = mysqli_fetch_array($sql)){
							echo "<option value='". $row['suburb'] ."'>" .$row['suburb'] ."</option>" ;
						}
					?>
				</select>
				<input type="submit">
				
				<hr>

				<p> Rating </p>
				<form>
					<input type="radio" name="radio1" value="all"> All
					<input type="radio" name="radio1" value="topRated"> Top Rated
				</form>

				<hr>
				<form>
					<p>Find My Nearest</p>
					<!-- Take to results page -->
					<input type="button" class="btn" onclick="location.href='reviewPageOut.php';" value="Find" />				
				</form>
				
				<hr>
				
			<!-- Footer -->
			<div class="footer">
				<p>
					John Tang | Dylan Nguyen
					<br>
					CAB230 Semester 1 2018
				</p>
			</div>
		</div>	
	</body>
</html>