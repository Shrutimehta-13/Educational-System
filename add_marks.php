<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	//$total = $_POST[DBMS]+$_POST[CNS]+$_POST[TOC]+$_POST[SPOS]+$_POST[DS];
	//$average = $total / 5.0;
	//$percentage = ($total / 500.0) * 100;
	$query = "insert into marks(s_no, DBMS, CNS, TOC, SPOS, DS, percentage) values($_POST[s_no],$_POST[DBMS],$_POST[CNS],$_POST[TOC],$_POST[SPOS],$_POST[DS], (($_POST[DBMS]+$_POST[CNS]+$_POST[TOC]+$_POST[SPOS]+$_POST[DS])*100)/500)";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Marks Added successfully.");
	window.location.href = "admin_dashboard.php";
</script>