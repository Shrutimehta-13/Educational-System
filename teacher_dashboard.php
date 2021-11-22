<!DOCTYPE html>
<html>
	<head>
		<title>
			Teacher Dashboard
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
		<style type="text/css">
			#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		</style>
		<?php
			session_start();
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,"sms");
		?>
	</head>
	<body>
		<div id="header">
			<center>College Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php">Logout</a>
		</center>
		</div>
		<span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span>
		<div id="left_side"><br><br><br>
			<form action="" method="POST">
				<table>
					<tr>
						<td>
							<input type="submit" name="show_detail" value="Show Details">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="edit_detail" value="Edit Details">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="show_timetable" value="Timetable">
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div id="right_side"><br><br>
			<div id="demo">
				<?php 
					if(isset($_POST['show_detail'])){
						$query = "select * from teachers where email = '$_SESSION[email]'";
						$query_run = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($query_run)){
							?>
							<table>
							<tr>
								<td>
									<b>Teacher ID:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['t_id']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mobile']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Courses:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['courses']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['password']?>" disabled>
								</td>
							</tr>
						</table>
					<?php
						}
					}
				?>

				<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from teachers where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_teacher.php" method="post">
						<table>
							<tr>
								<td>
									<b>Teacher ID:</b>
								</td> 
								<td>
									<input type="text" name="t_id" value="<?php echo $row['t_id']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" name="name" value="<?php echo $row['name']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" name="mobile" value="<?php echo $row['mobile']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Courses:</b>
								</td> 
								<td>
									<input type="text" name="courses" value="<?php echo $row['courses']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" name="email" value="<?php echo $row['email']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="text" name="password" value="<?php echo $row['password']?>" >
								</td>
							</tr>
							<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
						</table>
					</form>
					<?php
				}
			}
			?>

			<?php
				if(isset($_POST['show_timetable'])){
						?>
						<center>
							<h3> Time Table Display</h3><br>
							<table>
								<tr>
									<td id="td"><b>Teacher Name</b></td>
									<td id="td"><b>Subject</b></td>
									<td id="td"><b>Class</b></td>
									<td id="td"><b>Start Time</b></td>
									<td id="td"><b>End Time</b></td>
								</tr>
							</table>
						</center>
						<?php
					$query = "select * from timetable";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_name']?></td>
								<td id="td"><?php echo $row['subject']?></td>
								<td id="td"><?php echo $row['class']?></td>
								<td id="td"><?php echo $row['start_time']?></td>
								<td id="td"><?php echo $row['end_time']?></td>
							</tr>
						</table>
						</center>
						<?php
								}
					}
				?>
			
			</div>
		</div>
	</body>
</html>
