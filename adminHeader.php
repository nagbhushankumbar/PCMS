<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="jquery-3.4.1.min.js"></script>
	<link href="fotorama.css" rel="stylesheet">
 	<script src="fotorama.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

</head>
<body>


	<!--Contact Details-->
<div style="border-bottom: 5px solid orange;">
	<nav class="nav navbar-default" style="background-color:#0c7c99;">
		<ul class="nav navbar-nav ">		
			<li><a href="https://www.facebook.com/mcaiicmr/" class="fa fa-facebook" style="font-size:20px;color:white"></a></li>	
			<li><a class="fa fa-phone" style="font-size:20px;color:white"><font face="verdana" size="2"> &nbsp; 020-27657648 / 27650011</font></a></li>
			<li><a class="fa fa-envelope" style="font-size:20px;color:white"><font face="verdana" size="2"> &nbsp; info@iicmr.org</font></a></li>

		</ul>	
	</nav>
</div></body>
<!--Header part-->
<div style="border-bottom: 5px solid orange;">
		<nav class="navbar-default text-center" style="font-family: verdana;">
			<nav class="nav navbar-nav"><br><a href="home.php"><img src="pics/lo1.png" style="margin-left: 10%;" height="100" ></a></nav><br>
			<b>Audyogik Tantra Shikshan Sanstha's ( A.T.S.S. )</b>
			<h2><span style="color:maroon; font-weight: bold;">I</span><span style="color:#073767">nstitute</span> <span style="color:maroon; font-weight: bold;">O</span><span style="color:#073767">f</span> <span style="color:maroon; font-weight: bold;">I</span><span style="color:#073767">ndustrial</span> 
				<span style="color:maroon; font-weight: bold;">A</span><span style="color:#073767">nd</span> <span style="color:maroon; font-weight: bold;">C</span><span style="color:#073767">omputer</span> <span style="color:maroon; font-weight: bold;">M</span><span style="color:#073767">anagement</span> <span style="color:maroon; font-weight: bold;">A</span>nd 
				<span style="color:maroon; font-weight: bold;">R</span><span style="color:#073767">esearch</span></h2>
				<b>(Approved by AICTE & Affiliated to Savitribai Phule Pune University, Recognized by Gov. of Maharashtra,Accredited by NAAC)</b>	
		</nav>
<br/>
</div>

<!--Menu bar-->
<div  style="border-bottom: 5px solid orange;">
	<nav class="nav navbar-default" style="background-color:#0c7c99;">
		<ul class="nav navbar-nav row">
			<li><p style="margin-left: 2em;margin-right: 2em; padding-top: 7px; color: white;font-family: verdana; font-size: 25px; font-weight: bold;">IICMR PLACEMENT CELL</p></li>

			<li><a href="home.php" style="font-family: verdana;font-size: 17px; " id="drp1"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
			
			<li class="dropdown ">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: verdana;font-size: 17px;" id="drp1">Report<span class="caret"></span></a>
		        <ul class="dropdown-menu" style="background-color:#045c73; font-size: 15px;">
		          <li><a href="studentReport.php" id="drp">View Students</a></li>
		          <li><a href="#" id="drp">Unplaced Students</a></li>
		          <li><a href="compReport.php" id="drp">View Company</a></li>
		           <li><a href="#" id="drp">Job Report</a></li>
		        </ul>
		    </li>

		    <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: verdana;font-size: 17px;" id="drp1">Student<span class="caret"></span></a>
		        <ul class="dropdown-menu" style="background-color:#045c73; font-size: 15px;">
		          <li><a href="filter.php" id="drp">Filter Student</a></li>
		          
		      	</ul>
		    </li>
		    
		    <li><a href="interview.php" style="font-family: verdana;font-size: 17px;" id="drp1"> Interview Details</a>
		    </li>
		    <?php include'config.php' ?>
		    <?php

		    	$sql_1=" SELECT * FROM `tempcompany`";
				$result1 = mysqli_query($con, $sql_1);

				
				$cnt1=0;
				
				while($row = mysqli_fetch_array($result1))
				
					 $cnt1++;

					
				mysqli_close($con);
		    ?>


		    <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: verdana;font-size: 17px;" id="drp1">Notification<span class="caret"></span></a>
		        <ul class="dropdown-menu" style="background-color:#045c73; font-size: 15px;">
		          
		          <li><a href="CompNotification.php" id="drp">Company <span class="badge" style="color: white;background-color: maroon;"><?php echo $cnt1; ?></span></a></li>
		         
		      	</ul>
		    </li>	
		</ul>
	</nav>
</div>
<!-- NOTICE  MArquee -->
<div class="container-fluid" style="background-color: maroon; color: white;">
	<marquee scrollamount=10>IICMR  PLACEMENT  CELL  which  aims  at  sharpening  the  skills  of  individual’s  for  success  in  <b>Placement</b></marquee>

</div>

</body>
</html>