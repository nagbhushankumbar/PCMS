<?php
session_start();
header("location:home.php");
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body onload="logout();">


</body>
<script>
	function logout()
	{
			alert("You are logged out");
	}
</script>
</html>