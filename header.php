
<!DOCTYPE html>
<html>
<head>
	<title>    </title>
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

	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	
  <style type="text/css">
  	label.error{color:red}

	#drp1
	{
		transition: 0.5s;	
		background-color: #0c7c99;
		color: white;
	}
	#drp1:hover
	{
		color: black;
		background-color: white;
	}

	#drp
	{	
		color: white;
		background-color: #0c7c99;

	}
	#drp:hover
	{
		background-color: white;
		color: black;
	}
</style>

<script>
	$(document).ready(function(){
		$("#adminlogin").validate({
				rules:{
						adname:{required:true},
						adpass:{required:true}

					  },//End of rules
				
				messages:{
							adname:{required:"Enter your Email as Username"},
							adpass:{required:"Enter your Password"}
						 }//End of messages

			});	//End of validate
	
			$("#submit").click(function(){
				$("#adminlogin").valid();
			});//End of jQuery
	});
</script>
<script>
	$(document).ready(function(){
		$("#login").validate({
				rules:{
						stdlog:{required:true},
						stdpass:{required:true}
						
					  },//End of rules
				
				messages:{
							
							stdlog:{required:"Enter your Email as your Username"},
							stdpass:{required:"Enter your Password"}
						 }//End of messages

			});	//End of validate
		
		$("#submit").click(function(){
				$("#login").valid();
			});//End of jQuery
	});
</script>
<script>
	$(document).ready(function(){
		$("#login_cpy").validate({
				rules:{
						cpyname:{required:true},
						cpypass:{required:true}

					  },//End of rules
				
				messages:{
							cpyname:{required:"Enter your Email as Username"},
							cpypass:{required:"Enter your Password"}
						 }//End of messages

			});	//End of validate
	
			$("#submit").click(function(){
				$("#login_cpy").valid();
			});//End of jQuery
	});
</script>


</head>

<body style="font-family: verdana;">

<div style="border-bottom: 5px solid orange;">
	<nav class="nav navbar-default" style="background-color:#0c7c99; ">
		<ul class="nav navbar-nav ">		
			<li><a href="https://www.facebook.com/mcaiicmr/" class="fa fa-facebook" style="font-size:20px;color:white"></a></li>	
			<li><a class="fa fa-phone" style="font-size:20px;color:white"><font face="verdana" size="2"> &nbsp; 020-27657648 / 27650011</font></a></li>

			<li><a class="fa fa-envelope" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWrRnXfFLcDhtZzCDMqbcQCnJxftlGfSbgQSMknRMHvvHwrDjxQDSRLmBsPqxZspFvnwsbjTB" style="font-size:20px;color:white"><font face="verdana" size="2"> &nbsp; info@iicmr.org</font></a></li>
		</ul>		
	</nav>
</div>


<!--Header part-->
<div style="border-bottom: 5px solid orange;">
		<nav class="navbar-default text-center" style="font-family: verdana;">
			<nav class="nav navbar-nav"><br><a href="index.php"><img src="pics/lo1.png" style="margin-left: 10%;" height="100"></a></nav><br>
			<b>Audyogik Tantra Shikshan Sanstha's ( A.T.S.S. )</b>
			<h2><span style="color:maroon; font-weight: bold;">I</span><span style="color:#073767">nstitute</span> <span style="color:maroon; font-weight: bold;">O</span><span style="color:#073767">f</span> <span style="color:maroon; font-weight: bold;">I</span><span style="color:#073767">ndustrial</span> 
				<span style="color:maroon; font-weight: bold;">A</span><span style="color:#073767">nd</span> <span style="color:maroon; font-weight: bold;">C</span><span style="color:#073767">omputer</span> <span style="color:maroon; font-weight: bold;">M</span><span style="color:#073767">anagement</span> <span style="color:maroon; font-weight: bold;">A</span>nd 
				<span style="color:maroon; font-weight: bold;">R</span><span style="color:#073767">esearch</span></h2>
				<b>(Approved by AICTE & Affiliated to Savitribai Phule Pune University, Recognized by Gov. of Maharashtra,Accredited by NAAC)</b>	<br><br>		
		</nav>
</div>



<!--Menu Bar-->
<div class="" style="background-color:#0c7c99;border-bottom: 5px solid orange;">
	<nav class="nav navbar-default" style="background-color:#0c7c99;">
		<ul class="nav navbar-nav" style="">
			<li class="active" style="margin-left: 2em;margin-right: 2em;padding-top: 7px; color: white;font-family: verdana; font-size: 25px; font-weight: bold;"><span class="glyphicon glyphicon-education" style="font-size: 30px;"></span> IICMR PLACEMENT CELL</li>
			
			<li><a href="home.php" style="font-family: verdana;font-size: 17px;" id="drp1"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>

			
		        <li><a  href="mainlogin.php" style="font-family: verdana;font-size: 17px;" id="drp1">Login </span></a></li>
		    
		    <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: verdana;font-size: 17px;" id="drp1">Registration <span class="caret"></span></a>
		        <ul class="dropdown-menu" style="background-color:#0c7c99; font-size: 15px;">
		          <li><a href="Reg1.php" id="drp">Student</a></li>
		          <li><a href="compRegister.php" id="drp">Company</a></li>
		      	</ul>
		    </li>

		    <li><a href="Edifice.php" style="font-family: verdana;font-size: 17px;" id="drp1">Edifice</a></li>
		    <li><a href="process.php" style="font-family: verdana;font-size: 17px;" id="drp1">Process</a></li>	
		    <li><a href="feedback.php" style="font-family: verdana;font-size: 17px;" id="drp1">Feedback</a></li>	     

		           
		</ul>
	</nav>
</div>

<!--Closing of Menu Bar-->
	<div class="container-fluid" style="background-color: maroon; color: white;">
				<marquee>WELCOME TO IICMR PLACEMENT CELL which aims at sharpening the skills of individual’s for success in <b>Placement</b> tests from Aptitude,Technical Tests to Group Discussions and Interviews.</marquee>

	</div>

</body>
</html>