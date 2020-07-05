<?php
	session_start();

		while(isset($_SESSION['username']))
		{

			echo '<script>alert("You Are Already Login ! ")</script>';
			echo '<script>window.location="AdminPanel.php"</script>';
			exit(0);
		}
?>
<html>
<head>
	<title>PCMS-Admin Login</title>
	<script src="jquery-3.4.1.min.js"></script>
	<script src="validate.js"></script>	

	<script>
		$(document).ready(function(){
		$("#register").validate({
				rules:{
						username:{
									required:true,
									maxlength:30
								 },
						password:{
								required:true
							 }
					
					  },//End of rules
				
				messages:{
							
							username:{required:"Enter Username "},
							password:{required:"Enter your Password"}

						 }//End of messages

			});	//End of validate
	
			$("#login").click(function(){
				$("#register").valid();
			});//End of jQuery
	});
</script>

</head>

<body class="container-fluid" style="font-family: verdana;">
	<?php include'header.php';?>
	<?php include'config.php' ?>
	<div class="row">
		<p class="col-sm-1"></p>
		<form id="register"  method="POST" class="form-group col-sm-3">
			<h3 style="font-weight: bold;">Admin Login :</h3>

			<p style="font-weight: bold; font-size: 16px;">Username :</p>
			<input id="text" type="text" class="form-control" name="username"/>
			
			<p style="font-weight: bold;font-size: 16px;">Password :</p>
			<input id="password" type="password" class="form-control" name="password"/><br>
			
			<input type="submit" class="btn btn-success" name="login" value="login">

		</form>

		<div class="col-sm-4">
			


		</div>

		<div class="col-sm-3">
			

			
		</div>
	</div>

	<?php
		include'footer.php';
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];


			$query="SELECT * from  admin where username='$username' AND password='$password'";

			$run=mysqli_query($con,$query);
			
			if(mysqli_num_rows($run)>0)
			{	
				$_SESSION['username']=ucwords($username);
				echo "<script>window.open('AdminPanel.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('Invalid User !!!')</script>";
			}
		}	
	?>
	
</body>
</html>