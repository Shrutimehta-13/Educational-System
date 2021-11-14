<script type="text/javascript">
	if(confirm("Warning!! Confirm delete student?")){
		document.write("<?php 
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "delete from teachers where t_id = $_POST[t_id]";
				$query_run = mysqli_query($connection,$query);
			?>")
			alert("Teacher Deleted successfully.");
			window.location.href = "admin_dashboard.php";
	}
	else{
		window.location.href = "admin_dashboard.php";
	}
</script>

