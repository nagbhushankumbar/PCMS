<?php 
	session_start();
	if(!isset($_SESSION['name']))
	{

			echo "<script>alert('Login first !')</script>";
		header("location:mainLogin.php");
	}
	else
	{
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body class="container-fluid">
	
	<nav>
		<ul class="container-fluid nav navbar-nav navbar-right ">
	      		<li><a id="user" href="studentProfile.php" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?> </a></li>
	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout  </a></li>
	    </ul>
    </nav>



<?php include'header.php';?>
<?php include'config.php'; ?>
<br>

<!--Notice board-->
	<div class="row">	
		<div class="col-sm-7" style="border:1px ">
			<div class="container-fluid table-responsive">
				<table class="table table-hover table-bordered">
					<h3 style="font-weight: bold;">Details of Placed Students :</h3>
						<tr class="info">
							<th>Company Name</th>
							<th>Drive Date</th>
							<th>Required Skills</th>
							<th>Interview Round Details</th>
							<th>Eligibility Criteria</th>
							<th>Open File</th>
						</tr>

<?php
	$query="SELECT * FROM `admindrivedetails` order by drivedate" ;

	if ($result = $con->query($query)) 
	{
	    while ($row = $result->fetch_assoc()) 
	    {	    
	    	?>
						<form method="post">
						<tr>
							<td><?php echo $row["compName"]; ?></td>
							<td><?php echo $row["drivedate"]; ?></td>
							<td><?php echo $row["reqskills"]; ?></td>
							<td><?php echo $row["rounddetail"]; ?></td>
							<td><?php echo $row["eligibility"]; ?></td>
							 <td><a target="_blank" class="btn btn-info" type="application/octet-stream" href='file/<?php echo $row['pdf_file']?>'>View More Details</a></td>							
							<input type="text" name="txtID" value='<?php echo $row["id"]; ?>' hidden>
						</tr>
						</form>
		<?php }}
			
		?>			
			</table></div>	
	
		</div>
		

		<div class="col-sm-4" style="border:2px solid black;border-bottom: none; border-radius: 5px;">
			<h3 style="font-size: 25px;font-weight: bold;text-align: center; font-family: verdana;">Updates and Notifications</h3>	
		</div>
		

		<div class="col-sm-4" style="border:2px solid black; height: 390px; border-radius: 5px;">
				<marquee direction=up scrollamount=3 height=370px;>
				<?php 
					$query = "SELECT * FROM `updates`";
					$result = mysqli_query($con, $query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_array($result))
						{
				?>	
					<h3 style="font-size: 25px;font-weight: bold;text-align: center; font-family: verdana;background-color:#0c7c99;color: white; ">

						<?php echo $row["notify"] ?>
						
					</h3>
					<?php 

						}
					}

					?>
				</marquee>
		</div>
	</div>

</body>
<?php }
include 'footer.php'
 ?>
</html>