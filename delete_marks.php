<script type="text/javascript">
	if(confirm("Warning!! Confirm delete marks?")){
		document.write("<?php 
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "delete from marks where s_no = $_POST[s_no]";
				$query_run = mysqli_query($connection,$query);
			?>")
			alert("Marks Deleted successfully.");
			window.location.href = "admin_dashboard.php";
	}
	else{
		window.location.href = "admin_dashboard.php";
	}
</script>