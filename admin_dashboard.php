<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin Dashboard
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
			width: 85%;
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
		<span id="top_span"><marquee>Note:- This portal is open till 31 March 2022...Plz edit your information, if wrong.</marquee></span>
		<div id="left_side"><br><br><br>
			<form action="" method="POST">
				<table>
					<tr>
						<td>
							<input type="submit" name="search_student" value="Search student">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="edit_student" value="Edit student">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="add_new_student" value="Add New student">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="delete_student" value="delete student">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="show_students" value="Show Students">
						</td>
					</tr>
				</table>
			</form><br>
			<form action="" method="POST">
				<table>
					<tr>
						<td>
							<input type="submit" name="search_teacher" value="Search teacher">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="edit_teacher" value="Edit Teacher">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="add_new_teacher" value="Add New teacher">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="delete_teacher" value="delete teacher">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="show_teachers" value="Show Teachers">
						</td>
					</tr>
				</table>
			</form><br>
			<form action="" method="POST">
				<table>
					<tr>
						<td>
							<input type="submit" name="show_marks" value="Show Marks">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="add_marks" value="Add Marks">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="delete_marks" value="Delete Marks">
						</td>
					</tr>
				</table>
			</form><br><br>
			<form action="" method="POST">
				<table>
					<tr>
						<td>
							<input type="submit" name="show_certificate" value="Generate Certificate">
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div id="right_side"><br><br>
			<div id="demo">
				<?php
					if(isset($_POST['search_student'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Roll No:
								<input type="text" name="roll_no">
								<input type="submit" name="search_by_roll_no_for_search" value="search">
							</form>
						</center>
						<?php
					}
					if(isset($_POST['search_by_roll_no_for_search'])){
						$query = "select * from students where roll_no = '$_POST[roll_no]'";
						$query_run = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($query_run)){
							?>
							<table>
								<tr>
									<td><b>Roll No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['roll_no'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['name'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['father_name'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Class:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['class'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Mobile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['mobile'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['email'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><input type="text" value="<?php echo $row['password'];?>" disabled></td>
								</tr>
								<tr>
									<td><b>Remark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td><textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea></td>
								</tr>
							</table>
							<?php
						}
					}
				?>
				<?php
					if(isset($_POST['edit_student'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Roll No:
								<input type="text" name="roll_no">
								<input type="submit" name="search_by_roll_no_for_edit" value="search">
							</form>
						</center>
						<?php
					}
					if(isset($_POST['search_by_roll_no_for_edit'])){
						$query = "select * from students where roll_no = '$_POST[roll_no]'";
						$query_run = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($query_run)){
							?>
							<form action="admin_edit_student.php" method="POST">
								<table>
									<tr>
										<td><b>Roll No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="roll_no" value="<?php echo $row['roll_no']?>"></td>
									</tr>
									<tr>
										<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="name" value="<?php echo $row['name'];?>" ></td>
									</tr>
									<tr>
										<td><b>Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="father_name" value="<?php echo $row['father_name'];?>" ></td>
									</tr>
									<tr>
										<td><b>Class:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="class" value="<?php echo $row['class'];?>" ></td>
									</tr>
									<tr>
										<td><b>Mobile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
									</tr>
									<tr>
										<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
									</tr>
									<tr>
										<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><input type="text" name="password" value="<?php echo $row['password'];?>" ></td>
									</tr>
									<tr>
										<td><b>Remark:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
										<td><textarea rows="3" cols="40" name="remark" ><?php echo $row['remark']?></textarea></td>
									</tr><br>
									<tr>
										<td></td>
										<td><input type="submit" name="edit" value="Save"></td>
									</tr>
								</table>
							</form>
							<?php
						}
					}
				?>
				

				<?php
					if(isset($_POST['add_new_student'])){
						?>
						<center><h3>Fill the Student Details:</h3></center>
						<form action="add_student.php" method="POST">
							<table>
								<tr>
									<td>Roll No: </td>
									<td><input type="text" name="roll_no" required></td>
								</tr>
								<tr>
									<td>Name: </td>
									<td><input type="text" name="name" required></td>
								</tr>
								<tr>
									<td>Father's Name: </td>
									<td><input type="text" name="father_name" required></td>
								</tr>
								<tr>
									<td>Class: </td>
									<td><input type="text" name="class" required></td>
								</tr>
								<tr>
									<td>Mobile: </td>
									<td><input type="text" name="mobile" required></td>
								</tr>
								<tr>
									<td>Email: </td>
									<td><input type="text" name="email" required></td>
								</tr>
								<tr>
									<td>Password: </td>
									<td><input type="password" name="password" required></td>
								</tr>
								<tr>
									<td>Remark: </td>
									<td><textarea rows="3" cols="40" name="remark"></textarea></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="add" value="Add Student"></td>
								</tr>
							</table>
						</form>
						<?php
					}
				?>

				<?php
					if(isset($_POST['delete_student'])){
						?>
						<center>
							<h3>Enter Roll No of student to be deleted</h3><br><br>
							<form action="delete_student.php" method="POST">
								Roll No: <input type="text" name="roll_no">
								<input type="submit" name="search_by_roll_no_for_delete" value="delete student">
							</form>
						</center>
						<?php
					}
				?>

				<?php
					if(isset($_POST['show_students'])){
						?>
						<center>
							<h3> Students Details</h3>
							<table>
								<tr>
									<td id="td"><b>Roll No</b></td>
									<td id="td"><b>Name</b></td>
									<td id="td"><b>Father's Name</b></td>
									<td id="td"><b>Class</b></td>
									<td id="td"><b>Mobile</b></td>
									<td id="td"><b>Email</b></td>
									<td id="td"><b>Password</b></td>
									<td id="td"><b>Remark</b></td>
								</tr>
							</table>
						</center>
						<?php
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['roll_no']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['father_name']?></td>
								<td id="td"><?php echo $row['class']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['password']?></td>
								<td id="td"><?php echo $row['remark']?></td>
							</tr>
						</table>
						</center>
						<?php
								}
					}
				?>

<!-- Teacher Section-->
				<?php
					if(isset($_POST['search_teacher'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Teacher ID:
								<input type="text" name="t_id">
								<input type="submit" name="search_by_t_id_for_search" value="search">
							</form>
						</center>
						<?php
					}
					if(isset($_POST['search_by_t_id_for_search'])){
						$query = "select * from teachers where t_id = '$_POST[t_id]'";
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
					if(isset($_POST['edit_teacher'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Teacher ID:
								<input type="text" name="t_id">
								<input type="submit" name="search_by_t_id_for_edit" value="search">
							</form>
						</center>
						<?php
					}
					if(isset($_POST['search_by_t_id_for_edit'])){
						$query = "select * from teachers where t_id = '$_POST[t_id]'";
						$query_run = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($query_run)){
							?>
							<form action="admin_edit_teacher.php" method="POST">
								<table>
							<tr>
								<td>
									<b>Teacher ID:</b>
								</td> 
								<td>
									<input type="text" name="t_id" value="<?php echo $row['t_id']?>" >
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
					if(isset($_POST['add_new_teacher'])){
						?>
						<center><h3>Fill the teacher Details:</h3></center>
						<form action="add_teacher.php" method="POST">
							<table>
								<tr>
									<td>t_id: </td>
									<td><input type="text" name="t_id" required></td>
								</tr>
								<tr>
									<td>Name: </td>
									<td><input type="text" name="name" required></td>
								</tr>
								<tr>
									<td>Mobile: </td>
									<td><input type="text" name="mobile" required></td>
								</tr>
								<tr>
									<td>Courses: </td>
									<td><input type="text" name="courses" required></td>
								</tr>
								<tr>
									<td>Email: </td>
									<td><input type="text" name="email" required></td>
								</tr>
								<tr>
									<td>Password: </td>
									<td><input type="text" name="password" required></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="add" value="Add Teacher"></td>
								</tr>
							</table>
						</form>
						<?php
					}
				?>

				<?php
					if(isset($_POST['delete_teacher'])){
						?>
						<center>
							<h3>Enter Teacher ID of teacher to be deleted</h3><br><br>
							<form action="delete_teacher.php" method="POST">
								t_id: <input type="text" name="t_id">
								<input type="submit" name="search_by_t_id_for_delete" value="delete teacher">
							</form>
						</center>
						<?php
					}
				?>

								<?php
					if(isset($_POST['show_teachers'])){
						?>
						<center>
							<h3> Teachers Details</h3>
							<table>
								<tr>
									<td id="td"><b>ID</b></td>
									<td id="td"><b>Name</b></td>
									<td id="td"><b>Mobile</b></td>
									<td id="td"><b>Courses</b></td>
									<td id="td"><b>Email</b></td>
									<td id="td"><b>Password</b></td>
									<td id="td"><b>View Detail</b></td>
								</tr>
							</table>
						</center>
						<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['courses']?></td>
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['password']?></td>
								<td id="td"><a href="#">View</a></td>
							</tr>
						</table>
						</center>
						<?php
								}
					}
				?>

<!--Marks Section-->
				<?php
					if(isset($_POST['show_marks'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Roll No:
								<input type="text" name="roll_no">
								<input type="submit" name="show_student_marks" value="search">
							</form>
						</center>
						<?php
					}

				if(isset($_POST['show_student_marks'])){
					//$query = "select * from marks join students on marks.s_no = students.s_no ";
					$query = "select m.*, s.roll_no, s.name from marks m left join students s on m.s_no=s.s_no where s.roll_no = $_POST[roll_no]";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
							?>
							<center>
							<form action="" method="POST">
								<table>
							<tr>
								<td>
									<b>Student ID:</b>
								</td> 
								<td>
									<input type="text" name="s_no" value="<?php echo $row['s_no']?>" disabled >
								</td>
							</tr>
							<tr>
								<td>
									<b>Roll No:</b>
								</td> 
								<td>
									<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" name="name" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>DBMS:</b>
								</td> 
								<td>
									<input type="text" name="DBMS" value="<?php echo $row['DBMS']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>CNS:</b>
								</td> 
								<td>
									<input type="text" name="CNS" value="<?php echo $row['CNS']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>TOC:</b>
								</td> 
								<td>
									<input type="text" name="TOC" value="<?php echo $row['TOC']?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>SPOS:</b></td>
								<td>
									<input type="text" name="SPOS" value="<?php echo $row['SPOS']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>DS:</b>
								</td> 
								<td>
									<input type="text" name="DS" value="<?php echo $row['DS']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Percentage %:</b>
								</td> 
								<td>
									<input type="text" name="percentage" value="<?php echo $row['percentage']?>" disabled>
								</td>
							</tr>
						</table><br><br>
							</form>
							<button onclick="window.print()">Print Result</button>
						</center>
							<?php
						}
					}
				
				?>

				<?php
					if(isset($_POST['add_marks'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Serial No:
								<input type="text" name="s_no">
								<input type="submit" name="add_student_marks" value="search">
							</form>
						</center>
						<?php
					}
					if(isset($_POST['add_student_marks'])){
						?>
						<center><h3>Fill the marks Details:</h3></center>
						<form action="add_marks.php" method="POST">
							<table>
								<tr>
									<td>s_no: </td>
									<td><input type="text" name="s_no"></td>
								</tr>
								<tr>
									<td>DBMS: </td>
									<td><input type="text" name="DBMS" required></td>
								</tr>
								<tr>
									<td>CNS: </td>
									<td><input type="text" name="CNS" required></td>
								</tr>
								<tr>
									<td>TOC: </td>
									<td><input type="text" name="TOC" required></td>
								</tr>
								<tr>
									<td>SPOS: </td>
									<td><input type="text" name="SPOS" required></td>
								</tr>
								<tr>
									<td>DS: </td>
									<td><input type="text" name="DS" required></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="add" value="Add Marks"></td>
								</tr>
							</table>
						</form>
						<?php

					}
				?>

				<?php
					if(isset($_POST['delete_marks'])){
						?>
						<center>
							<h3>Enter Serial No of student whose marks are to be deleted</h3><br><br>
							<form action="delete_marks.php" method="POST">
								Roll No: <input type="text" name="s_no">
								<input type="submit" name="search_by_roll_no_for_delete" value="delete marks">
							</form>
						</center>
						<?php
					}
				?>

<!--Certificate Section -->
				
				<?php
					if(isset($_POST['show_certificate'])){
						?>
						<center>
							<form action="" method="POST">
								Enter Roll No:
								<input type="text" name="roll_no">
								<input type="submit" name="search_certificate" value="search">
							</form>
						</center>
						<?php
					}
					if(isset($_POST['search_certificate'])){
						$query = "select m.*, s.roll_no, s.name, s.father_name, s.email from marks m  join students s on m.s_no=s.s_no where s.roll_no='$_POST[roll_no]'";
						$query_run = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($query_run)){
							?>
							<center>
								<h2>Leaving Certificate</h2><br>


								<p><h6>Name:&nbsp;&nbsp;<span><?php echo $row['name'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email:&nbsp;&nbsp;<span></span><?php echo $row['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Father's Name:&nbsp;&nbsp;<span><?php echo $row['father_name'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No:&nbsp;&nbsp;<span><?php echo $row['roll_no'];?></span></h6><br><br>
							
								This is to certify that <b><?php echo $row['name'];?></b>, child of <b><?php echo $row['father_name'];?></b> has successfully completed the required college years from AISSMS IOIT with percentage of <b><?php echo $row['percentage'];?></b>.<p> Wishing him/her Best of Luck for Future!
							</center><br><br>
							<p style="text-align: center;"> Regards, <br> Mahesh Kamat (HOD)
							<br><br><br>
							<button onclick="window.print()">Print Certificate</button>
							<?php
						}
					}
				?>

			</div>
		</div>
	</body>
</html>
