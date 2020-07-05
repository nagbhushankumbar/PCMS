2<!DOCTYPE html>
<html>
<head>
	<title>PCMS-Comapny Registration</title>

	<script src="jquery-3.4.1.min.js"></script>
	<script src="validate.js"></script>
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
		$("#register").validate({
				rules:{
						compnay_name:{
									required:true,
									maxlength:20
								 },
						compnay_details:{
								required:true
						},
						cperson:{
									required:true,
									maxlength:10,
									minlength:10
						},
						pass1:{
								required:true,
								minlength:5,
								maxlength:15
							 },
						pass2:{
								required:true,
								//equalTo:"#pass1"
							 }
					
					  },//End of rules
				
				messages:{
							
							compnay_name:{required:"Enter the Company Name Field"},
							compnay_details:{required:"Please Enter Company Details"},
							cperson:{required:"Please Mention Company's Contact Number"},
							pass1:{required:"Enter new Password",
									minlength:jQuery.validator.format("Enter at least {0} characters")
								  },
							pass2:{required:"Renter your Password"}

						 }//End of messages

			});	//End of validate
	
			$("#submit").click(function(){
				$("#register").valid();
			});//End of jQuery
	});
</script>

</head>
<body class="container-fluid" style="font-family: verdana">

	

<?php include'header.php'; ?>
<?php include'config.php' ?>
<!--Registration-->
<div class="container-fluid" style="border:2px solid maroon;">
	
	<form id="register" method="post" class="form-group shadow-textarea">
		
		<div class="col-sm-4">
			<p style="text-align: right; font-size: 30px; font-weight: bold;padding-top: 10px;">Company Registration :</p>
			
			<b>Company Name :</b> <input type="text" name="compnay_name" class="form-control" placeholder="Company Name"><br>
	
			<b>Company Details : </b><textarea name="compnay_details" class="form-control" placeholder="Company Details" ></textarea><br>
			
			<b>Email Address:</b> <input type="email" name="email" class="form-control" placeholder="Enter Company's Email Address" required><br>

			<b>Contact Person:</b> <input type="text" name="cperson" class="form-control" placeholder="Enter Company's  Contact Person Number"><br>
			
			<b>Password :</b> <input type="Password" name="pass1" class="form-control" placeholder="Password"><br>
	
			<b>Re-Password :</b> <input type="Password" name="pass2" class="form-control" placeholder="Re enter your Password"><br>
			
			<button type="submit" name="submit" id="submit" class="btn btn-success" style="width:200px; height:40px;">Submit</button> <br><br>
			
		</div>			

	</form>

	<br><br><br>
	<div class="col-sm-4" >
		<h4>Students Required track(Stream wise) Details</h4>	
		<table class="table">
			<tr>
				<th>MCA</th>
				<th>MBA</th>	
			</tr>
			
			<tr>
				<td>Track 2(Infrastructure & Security)</td>
				<td>IT</td>
			</tr>

			<tr>
				<td>Track 3(QC)</td>
				<td>Marketing</td>
			</tr>

			<tr>
				<td>Track 4(Networking)</td>
				<td>Bussiness Essentials</td>
			</tr>
		</table>
		<img src="pics/png.png" style="height: auto;">
	</div>

</div>	<!--Registration Close-->
<br>
<!--Footer Part-->

<!--database new-->
<?php 
	
	if(isset($_POST['submit']))
	{

		$compnay_name=$_POST['compnay_name'];
		$compnay_details=$_POST['compnay_details'];
		$email=$_POST['email'];
		$cperson=$_POST['cperson'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
				
		$query="INSERT INTO tempcompany VALUES('$compnay_name', '$compnay_details', '$email', '$cperson', '$pass1', '$pass2')";
		
		$run=mysqli_query($con,$query);
		
		if($run==true)
		{	
			echo "<script>alert('congrats $compnay_name Your request has sent successfully..!!')</script>";
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