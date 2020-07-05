<html>
<head>

	<title>PCMS-Student Registration</title>
	
	<script src="jquery-3.4.1.min.js"></script>
	<link href="fotorama.css" rel="stylesheet">
 	<script src="fotorama.js"></script>
	
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 	<script src="jquery-3.4.1.min.js"></script>
	<script src="validate.js"></script>
	<style>
		label.error{color:red}
	</style>
<script>
	$(document).ready(function(){
		$("#register-form").validate({
				rules:{
						student_name:{
									required:true,
									minlength:4,
									lettersonly:true
								 },
						email:{
								required:true,
								email:true
						},
						contact:{
								required:true,
								maxlength:10
						},
						skills:{
								required:true
						},
						pass1:{
								required:true,
								minlength:5,
								maxlength:15
							 },
						pass2:{
								required:true,
								equalTo:"#pass1"
							 }
					
					  },//End of rules
				
				messages:{
							
							student_name:{required:"Student name is Required"},

							contact:{required:"Enter Your 10 digit Contact Number"},

							pass1:{required:"Enter new Password",
									minlength:jQuery.validator.format("Enter at least {0} characters")
								  },
							email:{required:"Please Enter your Email Address"}

						 }//End of messages

			});	//End of validate
	
			$("#submit").click(function(){
				$("#register-form").valid();
			});//End of jQuery
	});
</script>

</head>
<body style="font-family: verdana;" class="container-fluid">

<?php include'header.php' ?> 
<?php include'config.php'; ?>

<div class="container-fluid" style="border :3px solid maroon;" >
<div class="container-fluid" >


		
		<div><p style="text-align: center; font-size: 30px; font-weight: bold;padding-top: 10px;">Student Registration :</p></div>
		<br>
		<div class="col-md-4">
			<form id="register-form" method="post">		
			<b>Student Name :</b>
				<input type="text" class="form-control" name="student_name" placeholder="Enter your full Name"></br>
			
			<b>Email Address :</b>
				<input type="text" class="form-control" name="email" placeholder="Enter valid Email-Address"><br/>
			
			<b>Contact :</b>
				<input type="text" class="form-control" name="contact" placeholder="Enter Your Contact Number"><br/>
			
			<b>Select Gender :</b><br>
		 		<div class="col-md-4"><input type="radio" name="gender" value="Male"><b> Male</b></div>&nbsp;&nbsp;&nbsp;&nbsp;
			
		 		<div class="col-md-4"><input type="radio" name="gender" value="Female"><b> Female</b></div><br><br>

			<b>Skills :</b>
				<textarea name="skills" class="form-control"  placeholder="Enter if you have any key Skills...."></textarea><br>	
		
			<div class="row">
				<div class="col-md-6">
						<b>Select Qualification :</b>	
					  	<select class="form-control" name="qualification">
					  		<option selected value=" ">--------------------</option>
					  		<option>MCA I </option>
					  		<option>MCA II </option>
					  		<option>MCA III </option>
					  		<option>MBA I </option>
					  		<option>MBA II </option>
					  	</select>
				</div>	
		

				<div class="col-md-6">
					<b>Select Passing Year :</b>
				<select class="form-control" size="" name="passyear">
		     			<option selected>--------------------</option>
		     			<option>2000</option>
		     			<option>2001</option>
		     			<option>2002</option>
		     			<option>2003</option>
		     			<option>2004</option>
		     			<option>2005</option>
		     			<option>2006</option>
		     			<option>2007</option>
		     			<option>2008</option>
		     			<option>2009</option>
		     			<option>2010</option>
		     			<option>2011</option>
		     			<option>2012</option>
		     			<option>2013</option>
		     			<option>2014</option>
		     			<option>2015</option>
		     			<option>2016</option>
		     			<option>2017</option>
		     			<option>2018</option>
		     			<option>2019</option>
	     		</select>  
				</div>	  	
			</div>	
		

		</div>
		
		<div class="col-md-4">	
						<br>
			<b>Password :</b>
					<input type="password" class="form-control" name="pass1" placeholder="Create your new Password"><br/>
			
			<b>Confirm-Password :</b>
				<input type="password" class="form-control" name="pass2" placeholder="Re-enter your Password"><br/>
	
		</div>
	</div><br>
			<center><button type="submit" class="btn btn-success" name="submit" id="submit" style="width:180px; height:40px;">Submit</button></center><br>	
	
</form>
</div>
</div>

<!--database new-->
<?php 
	
	if(isset($_POST['submit']))
	{
		$student_name=$_POST['student_name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$gender=$_POST['gender'];
		$skills=$_POST['skills'];
		$qualification=$_POST['qualification'];
		$passyear=$_POST['passyear'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		
		$query="INSERT INTO tempstudent VALUES ('$student_name','$email','$contact','$gender','$skills','$qualification',$passyear,'$pass1','$pass2')";
		
		$run=mysqli_query($con,$query);
		
		if($run==true)
		{	
			echo "<script>alert('congrats $student_name Your request has sent successfully..!!')</script>";
		}
		else
		{
			echo "error occur data are not inserted";
		}

	}	
?>


<?php include'footer.php' ?>
</body>
</html>
