<?php
	session_start();
	
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into queries values('','$_SESSION[name]','$_SESSION[email]','$_POST[query]')";
	echo $query;
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Query Added successfully.");
	window.location.href = "student_dashboard.php";
</script>