<!--<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<center><br><br>
			<h3> Education System</h3><br><br>
			<form action="" method="POST">
				<input type="submit" name="admin_login" value="Admin Login" required>
				<input type="submit" name="student_login" value="Student Login" required>
				<input type="submit" name="teacher_login" value="Teacher Login" required>
			</form>

		</center>
	</body>
</html>

-->

<!DOCTYPE html>
<html>
	<head>

		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
	</head>
	<body>


<!-- Navigation Bar -->


		<div class="navigation-bar" id="home">


			<nav class="navbar navbar-expand-lg navbar-light bg-light heading">
  				<a class="navbar-brand" href="#">
			    <img src="https://previews.123rf.com/images/captainvector/captainvector1703/captainvector170309311/74165534-college-logo-element.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
			    Institute of Information Technology
			  </a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav links">
				      <li class="nav-item active">
				        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#login">Login</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#testimonials">Testimonials</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#footer">Links</a>
				      </li>
				    </ul>
  				</div>
			</nav>

		</div>


<!-- College Image -->

		<div>
			<center>
				<img  class="college-image" src="https://static01.nyt.com/images/2020/03/14/upshot/14up-colleges-remote/14up-colleges-remote-mediumSquareAt3X.jpg">
			</center>
		</div>

<!-- Login Buttons -->

		<div class="login" id="login">
			<center>
				<form action="" method="POST">
					<input class="btn btn-primary" type="submit" name="admin_login" value="Admin Login" required>
					<input class="btn-primary btn" type="submit" name="student_login" value="Student Login" required>
					<input  class= "btn btn-primary" type="submit" name="teacher_login" value="Teacher Login" required>
				</form>
				<?php
					if(isset($_POST['admin_login'])){
						header("Location: admin_login.php");
					}
					if(isset($_POST['student_login'])){
						header("Location: student_login.php");
					}
					if(isset($_POST['teacher_login'])){
						header("Location: teacher_login.php");
					}
				?>
			</center>
		</div>


<!-- Testimonials -->

	<section class="colored-section" id="testimonials">
	    <div id="testimonial-carousel" class="carousel slide" data-bs-ride="false">

	        <div class="carousel-inner">
	        	<div class="carousel-item active container-fluid">
	            		<h4 class="testimonial-text">???This program has been great so far. The faculty is supportive and readily available. The courses and individual lessons have been clear and coherent. I am able to work at my own pace, while also having instructors and other students available to answer questions or engage in discussions.???</h4>
	          			<img class="testimonials-image d-block w-100" src="images/prof-img.jpg" alt="lady-profile-profile">
	          			<em>Harry, New York</em>
	        	</div>
	        	<div class="carousel-item container-fluid">
		            <h2 class="testimonial-text">???The overall design of the online course is solid. I like those well-made PowerPoint slides. I also found the additional reading materials could greatly help me better understand the models and their use in real case. Models that I learned from HLM class greatly helped me in structuring my research project and further guide my data analysis. Plus, all instructors are very responsive in email correspondence.???</h2>
		            <img class="testimonials-image" src="images/prof-img.jpg" alt="lady-profile">
		            <em>Beverly, Illinois</em>
	        	</div>
	        	<div class="carousel-item container-fluid">
		            <h2 class="testimonial-text">???I took MEd MESA courses as my second degree concurrently with my first degree, PhD in Educational Psychology (specialization in Human Development and Learning). While I did not complete my PhD yet, obtaining MESA MEd allows me to search for jobs in the field of research. Additionally, through the MESA MEd I was able to enhance my research methodology skills. Especially, I like online classes because I was able manage my schedule.???</h2>
		            <img class="testimonials-image" src="images/lady-img.jpg" alt="lady-profile">
		            <em>Monica, San Francisco</em>
	        	</div>
	        </div>
	        <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
	        	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		        <span class="visually-hidden">Previous</span>
		    </button>
		    <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		        <span class="visually-hidden">Next</span>
		    </button>
	    </div>
  	</section>


 <!-- Footer -->

 	<div>
 		<footer class="white-section" id="footer">
		    <div class="container-fluid">
		      <i class="ft-logo fab fa-twitter"></i><i class="ft-logo fab fa-facebook"></i><i class="ft-logo fab fa-instagram"></i><i class="ft-logo fas fa-envelope"></i>
		      <p>?? Copyright 2018 Insitute of Information Technology.</p>
		    </div>
		</footer>
 	</div>


	</body>
</html>
