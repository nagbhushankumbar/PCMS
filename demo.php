<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<input type="text" name="email">
	<input type="text" name="pass2">
	<input type="submit" name="studlogin">


	<?php
//	session_start();

		
		if (isset($_POST['studlogin'])) 
		{
			$db= mysqli_connect("localhost","root","","pcms");
			
			$username=$_POST['email'];
			$password=$_POST['pass2'];

			$query="SELECT * from  student_reg where email='$username' AND pass2='$password'";
			echo $query;
			$run=mysqli_query($db,$query);
			
			if(mysqli_num_rows($run)>0)
			{	
				$_SESSION['email']=$username;
				echo "hellloooo";
			}
			else 
			{
				echo "<script>alert('Wrong login credentials..!!')</script>";
			}

		}

?>


</body>
</html>