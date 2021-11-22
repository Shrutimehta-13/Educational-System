<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into timetable values('$_POST[t_name]','$_POST[subject]','$_POST[class]','$_POST[start_time]','$_POST[end_time]')";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Timetable Added successfully.");
	window.location.href = "admin_dashboard.php";
</script>