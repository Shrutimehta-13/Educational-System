<!DOCTYPE html>
<html>
<head>
	<title>Teacher Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/teacher_login.css">
</head>
<body>
	<div class="header">

		<a href="login.php"><img class="home_button" src="images/house.png"></a>
		<center>
			<h1>Institute of Information Technology</h1>
		</center>
	</div>

	<center><br><br>

		<h3>Teacher Login Page</h3><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input class="btn btn-primary" type="submit" name="submit" value="Login">
		</form><br>

		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from teachers where email = '$_POST[email]'";
				$query_run = mysqli_query($connection, $query);
				while($row = mysqli_fetch_assoc($query_run)){
					if($row['email']==$_POST['email']){
						if($row['password']==$_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: teacher_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else{
						?>
							<span>Wrong Email !!</span>
							<?php
					}
				}

			}
		?>
	</center>
</body>
</html>
