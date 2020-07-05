<html>
<head>

	<title>IICMR PLACEMENT CELL</title>


	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  	<link href="fotorama.css" rel="stylesheet"/>
 	<script src="fotorama.js"></script>
 	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	
</head>

<body class="container-fluid">

<?php include'header.php'; ?>


<!--Slider and Notice-->
<div class="container-fluid row">
<br>
  	<div id="myCarousel" class="col-sm-8 carousel slide" data-ride="carousel" style="border-style:double;">
    
    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      
		    <div class="item active">
	      		<img src="pics/a1.jpg" alt="Los Angeles" style="width:100%;">
	        </div>

	      	<div class="item">
	        	<img src="pics/a2.png" alt="Chicago" style="width:100%;">
	      	</div>
		    
	      	<div class="item">
	        	<img src="pics/a3.jpg" alt="New york" style="width:100%;">
	      	</div>

		    <div class="item">
		    	<img src="pics/iicmr.jpg" alt="New york" style="width:100%;">
		    </div>

	      	<div class="item">
	        	<img src="pics/a6.jpg" alt="New york" style="width:100%;">
		    </div>

	      	<div class="item">
	        	<img src="pics/iicmr2.jpg" alt="New york" style="width:100%;">
	      	</div>
	    
	    </div>

    	<!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
  </div><!--closing Carousel-->



		<!--Notice board-->
		<div class="col-sm-4" style="border:5px solid black;border-bottom: none; border-radius: 5px; border-top-right-radius:35px;border-bottom-left-radius:0px;">
			<h3 style="font-size: 25px;font-weight: bold;text-align: center; font-family: verdana;">Updates and Notifications</h3>
		</div>

		
		<div class="col-sm-4" style="border:2px solid black; height: 390px; border-radius: 5px; border-top-right-radius: 0px;border-top-left-radius: 0px;">
			<marquee direction=up scrollamount=3 height=370px;>
		<?php include'config.php'; ?>
			<?php 
		
				$query = "SELECT * FROM `updates`";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
			?>	
				<h3 style="font-size: 25px;font-weight: bold;text-align: center; font-family: verdana;background-color:#0c7c99;color: white; "><?php echo $row["notify"] ?></h3>
				<?php 

					}
				}

				?>
			</marquee>
		</div><!-- closing of Notice board-->


</div><!--closing slider and Notice-->

<div class="container-fluid">

<div class="col-sm-12" style="font-size: 22px;font-family: verdana;">
	<center><h2><b> <span style="color:maroon; font-weight: bold;">About</span> &nbsp;<span style="color:#073767">IICMR</span> </b></h2>
	<hr size="10" style="width:10%; border: 1px solid black;"></center> 
	
	<div class="well" style="font-size:18px">
	<i><b>IICMR</b></i> is a Top Computer Application and Management Institute in the state of Maharashtra, which is a approved by All India Council of Technical Education (AICTE ), recognized by the Directorate of Technical Education ( DTE ), Govt. of Maharashtra and Affiliated to Savitribai Phule Pune University. The Institute is accredited by NAAC-National Assessment and Accreditation Council. <br>
	<i>The Job Opportunities</i> :<br> 
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Many graduates begin their career at a junior level but are not in a position to map their job with expert technical skills obtained from a usual programme. The specialized programme would enhance their exposure to variety of roles and responsibilities they can take up in any areas of expertise. For e.g.: In the area of software development they could take up responsibilities in areas of database, product development, product maintenance and support in addition to management activities. Focused grooming would also make it easier for the IT industry to decide which graduate could be mapped to the right domain. Enabling entrepreneurship is also the need of the hour and students interested to be on their own could leverage from the newly designed focused programme for entrepreneurs. It will build right platform for students to become successful Software professional. This would emphasize on domain knowledge of
	 various areas.
	</div>
</div>
</div>

<?php include'footer.php' ?>

</body>
</html>