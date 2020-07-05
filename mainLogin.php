<?php
	session_start();

		while(isset($_SESSION['name']))
		{

			echo "<script>alert('You Are Already Login !')</script>";
			echo '<script>window.location="studentLogin.php"</script>';
			exit(0);
		}

		while(isset($_SESSION['comp_name']))
		{

			echo "<script>alert('You Are Already Login !')</script>";
			echo '<script>window.location="compLogin.php"</script>';
			exit(0);
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PCMS-Login</title>
	<script src="jquery-3.4.1.min.js"></script>
	<script src="validate.js"></script>	


	<script>
	$(document).ready(function(){
		$("#register").validate({
				rules:{
						email:{
									required:true,
									maxlength:30
								 },
						pass2:{
								required:true,
								//equalTo:"#pass1"
							 }
					
					  },//End of rules
				
				messages:{
							
							email:{required:"Enter the Company Name Field"},
							pass2:{required:"Enter your Password"}

						 }//End of messages

			});	//End of validate
	
			$("#Studentlogin").click(function(){
				$("#register").valid();
			});//End of jQuery
	});

		$(document).ready(function(){
		$("#cregister").validate({
				rules:{
						email:{
									required:true,
									maxlength:30
								 },
						pass2:{
								required:true,
								//equalTo:"#pass1"
							 }
					
					  },//End of rules
				
				messages:{
							
							email:{required:"Enter the Company Name Field"},
							pass2:{required:"Enter your Password"}

						 }//End of messages

			});	//End of validate
	
			$("#complogin").click(function(){
				$("#cregister").valid();
			});//End of jQuery
	});
</script>

</head>
<body class="container-fluid">
<?php include 'header.php';?>
<?php include'config.php'; ?>
<div class="row">

<br>
	<p class="col-sm-1"></p>
	<div class="col-sm-4">
		
		<h3 class="modal-title"><b>Student Login</b></h3><br>
		<form id="register" method="post" class="form-group">
		        <b>Username :</b><input type="text" name="email" class="form-control" placeholder="Enter Username Here"><BR>
				<b>Password:</b><input type="password" name="pass2" class="form-control" placeholder="Enter Password Here"><BR>
				<input type="submit" id="Studentlogin" name="studlogin" class="btn btn-success" value="Login">
				<a href="#"><button style="background-color: transparent;border:none;">Forgot Password ?</button></a>
				<br><br>
			</form>
	</div>


	<p class="col-sm-1"></p>


	<div class="col-sm-4">
		
		<h3 class="modal-title"><b>Company Login</b></h3><br>
		<form id="cregister" method="post" class="form-group">
		        <b>Username :</b><input type="text" name="email" class="form-control" placeholder="Enter Username Here"><BR>
				<b>Password:</b><input type="password" name="pass2" class="form-control" placeholder="Enter Password Here"><BR>
				<input type="submit" id="complogin" name="complogin" class="btn btn-success" value="Login">
				<a href="#"><button style="background-color: transparent;border:none;">Forgot Password ?</button></a>
				<br><br>
			</form>
	</div>



</div>

<?php		
		if (isset($_POST['studlogin'])) 
		{
			$username=$_POST['email'];
			$password=$_POST['pass2'];

			$query="SELECT * from  student_reg where email='$username' AND password='$password'";
			$run=mysqli_query($con,$query);
		
			while($row = mysqli_fetch_array($run))
			{
				$name=$row['name'];
				$email=$row['email'];
				//echo $row['name'];
				//echo $row['password'];
			}

			//echo mysqli_num_rows($run);
			if(mysqli_num_rows($run)>0)
			{

				$_SESSION['name']=ucwords($name);
				$_SESSION['email']=$email;
				//echo $_SESSION['email'];
				//header("location: studentLogin.php");
				echo "<script>alert('Login Successful...$_SESSION[name]')</script>";
				echo "<script>window.open('studentLogin.php','_self')</script>";
			}
			else 
			{
				echo "<script>alert('Wrong login credentials..!!')</script>";
			}

		}



		if (isset($_POST['complogin'])) 
		{
			$username=$_POST['email'];
			$password=$_POST['pass2'];

			$query="SELECT * from  company_reg where email='$username' AND pass2='$password'";
			$run=mysqli_query($con,$query);
			
			while($row = mysqli_fetch_array($run))
			{
				$name=$row['compnay_name'];
			}


			if(mysqli_num_rows($run)>0)
			{
							
				$_SESSION['comp_name']=$name;
				//echo $_SESSION['comp_name'];
				echo "<script>alert('Login Successful...$_SESSION[comp_name]')</script>";
				echo "<script>window.open('complogin.php','_self')</script>";
			}
			else 
			{
				echo "<script>alert('Wrong login credentials..!!')</script>";
			}

		}

?>

<?php include 'footer.php';?>
</body>
</html>