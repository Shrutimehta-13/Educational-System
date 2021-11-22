<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into fees values($_POST[s_no],'$_POST[amount]','$_POST[date]')";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Fees Paid successfully.");
	window.location.href = "admin_dashboard.php";
</script>