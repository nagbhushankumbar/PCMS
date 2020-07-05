<html>
<head>

	<title>IICMR PLACEMENT CELL</title>

	
	
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
						username:{
									required:true,
									minlength:4,maxlength:10,
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
						skill:{
								required:true
						},
						pass1:{
								required:true,
								minlength:5,
								maxlength:8
							 },
						pass2:{
								required:true,
								equalTo:"#pass1"
							 },
					
					  },//End of rules
				
				messages:{
							
							username:{required:"Student name is Required"},

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
<body style="font-family: verdana;">

<?php include'header.html' ?>


<div style="border:2px solid maroon;">
<div class="container-fluid" >

<form id="register-form">
		
		<div><p style="text-align: center; font-size: 30px; font-weight: bold;padding-top: 10px;">Student Registration :</p></div>
		<br>
		<div class="col-md-4">
		
			<b>Student Name :</b>
				<input type="text" class="form-control" name="username" placeholder="Enter your full Name"></br>
			
			<b>Email Address :</b>
				<input type="text" class="form-control" name="email" placeholder="Enter valid Email-Address"><br/>
			
			<b>Contact :</b>
				<input type="text" class="form-control" name="contact" placeholder="Enter Your Contact Number"><br/>
			
			<b>Select Gender :</b><br>
		 		<div class="col-md-4"><input type="radio" name="rad"><b> Male</b></div>&nbsp;&nbsp;&nbsp;&nbsp;
			
		 		<div class="col-md-4"><input type="radio" name="rad"><b> Female</b></div><br><br>

			<b>Skills :</b>
				<textarea name="skill" class="form-control"  placeholder="Enter if you have any key Skills...."></textarea><br>	
		
			<div class="row">
				<div class="col-md-6">
						<b>Select Qualification :</b>	
					  	<select class="form-control">
					  		<option selected>--------------------</option>
					  		<option>MCA I </option>
					  		<option>MCA II </option>
					  		<option>MCA III </option>
					  		<option>MBA I </option>
					  		<option>MBA II </option>
					  	</select>
				</div>	
		

				<div class="col-md-6">
					<b>Select Passing Year :</b>
				<select class="form-control" size="">
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
			
			<b>Upload your Resume :</b><input type="file" class="form-control" name="" disabled><br>
			<b>Do you have Resume?</b> &nbsp;<input type="checkbox" class="custom-control-input" id="cust" name="chck1"><br><br>	
			
					<div class="row">
					<div class="col-md-6">
						<b>Select Job Role :</b>
		     		<select class="form-control">
			     			<option selected>------------------------</option>
			     			<option>Software Devloper</option>
			     			<option>Programmer</option>
			     			<option>Troubleshooter</option>
			     			<option>System Analyst</option>
			     			<option>Web Designer</option>
			     			<option>Other</option>
			     	</select>
					</div>
					</div>			   
			<br>
			<b>Password :</b>
					<input type="password" class="form-control" name="pass1" placeholder="Create your new Password"><br/>
			
			<b>Confirm-Password :</b>
				<input type="password" class="form-control" name="pass2" placeholder="Re-enter your Password"><br/>
	
		</div>
	</div><br>
			<center><button type="submit" id="submit" class="btn btn-success" style="width:180px; height:40px;">Submit</button></center><br>	
	</form>
</div>
<br>	

<?php include'footer.html' ?>
</body>
</html>