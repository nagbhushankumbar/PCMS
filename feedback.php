<!DOCTYPE html>
<html>
<head>
	<title>PCMS-Feedback</title>

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
	
</head>
<body class="container-fluid" style="font-family: verdana">
	
	
	<?php  include'header.php' ?>
	
	<form class="from-group" action="" method="">
	<div><br>
		<center><p class="text-center" style="font-size: 30px;font-weight: bold;">Student Feedback Form - Placement Drive<hr style="border:1px; solid black; width: 150px;"></p>
			<hr size="10" style="width:40%; border: 1px solid black;"></center> 
	</div>
	
	<div class="container-fluid ck">	
		<p class="col-sm-2 "></p>
		<h4 class="col-lg-4"><b>Please Enter Your Valuable Feedback :</b></h4>
		<h4 class="col-lg-2"><b>Good</b></h4>
		<h4 class="col-lg-2"><b>Average</b></h4>
		<h4 class="col-lg-2"><b>Bad</b></h4>
		<p class="col-lg-2"></p>
 
	</div>
	<hr>
	<div class="container-fluid ck">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-4">Overall Experience :</h4>
		<h5 class="col-sm-2"><input type="checkbox" name="check"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid ">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-4">Opportunity to gain related Experience :</h4>
		<h5 class="col-sm-2"><input type="checkbox" name="check1"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check1"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check1"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid ">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-4">Opportunity to Expand Professional Network :</h4>
		<h5 class="col-sm-2"><input type="checkbox" name="check2"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check2"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check2"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid ck">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-4">Ability to acquire new Skill  :</h4>
		<h5 class="col-sm-2"><input type="checkbox" name="check3"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check3"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check3"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid ck">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-4">Recommend Experience to Peers :</h4>
		<h5 class="col-sm-2"><input type="checkbox" name="check4"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check4"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check4"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid ck">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-4">Questions Difficulty level :</h4>
		<h5 class="col-sm-2"><input type="checkbox" name="check5"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check5"/></h5>
		<h5 class="col-sm-2"><input type="checkbox" name="check5"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid ck">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-6">Willingness to accept Pre-Placement Offers with the Organization :</h4>
		<h5 class="col-sm-1">Yes &nbsp;<input type="checkbox" name="check"/></h5>
		<h5 class="col-sm-1">NO &nbsp;<input type="checkbox" name="check"/></h5>
		<p class="col-sm-2"></p>
	</div>
	<hr>
	<div class="container-fluid">	
		<p class="col-sm-2"></p>
		<h4 class="col-sm-3">Comments Here</h4>
		<h5 class="col-sm-5"><textarea name="detail" class="form-control" rows="5" placeholder="Please Share your valuable feedback/comments or any complains." ></textarea></h5>
		<p class="col-sm-2"></p>
	</div><br>

	<center>
	<input type="submit" class="btn btn-success" style="width:200px; height:40px;"/><br><br>
	</center>

	</form>

	<?php  include'footer.php' ?>


	<?php
#////////////////////////////////////////////////////////////////////////////////////////////
# store in database 




#////////////////////////////////////////////////////////////////////////////////////////////
	?>


</body>
</html>