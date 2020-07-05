
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Interview Details</title>
</head>
<body class="container-fluid">
<nav>
		<ul class="container-fluid nav navbar-nav navbar-right ">
	      		<li><a id="user" href="#" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['username'];?></a></li>
	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout </a></li>
	    </ul>
</nav>
<?php include 'adminheader.php';?>

<?php
	$con=mysqli_connect("localhost","root","","pcms");
	$sql="SELECT * FROM compLogin order by drivedate";
	$result = mysqli_query($con, $sql);
?>
<div class="row">
	<p class=col-sm-2></p>
	<div class=" col-sm-8 table-responsive">          
	  <br>	<table class="table table-bordered table-hover">		
		      	<tr class="info">
			        <th>Company Name</th>
			        <th>Drive Date</th>
			        <th>Required Skills </th>
			        <th>Eligibility Criteria</th>
			        <th>Round Details</th>
			        <th>File</th>
			        <th>Copy</th>
			    </tr>
			</th>

	<?php
		while($row = mysqli_fetch_array($result))
	    {
	?>
	    <tr>
	    <form method="post" class="form-group">
	    	<td><?php echo $row['compName'];?></td>
	    	<td><?php echo $row['drivedate'];?></td>
	    	<td><?php echo $row['reqskills'];?></td>
	    	<td><?php echo $row['eligibility'];?></td>
	    	<td><?php echo $row['rounddetail'];?></td>
	    	<td><?php echo $row['pdf_file'];?></td>
	    	<input type="text" name='txt'  value=<?php echo $row['id'];  ?> hidden>
	    	<td><input type="submit" name="btn" class="btn btn-success" value="Copy as Same"></td>    	
	    </form>
	    </tr>
	    <?php }  ?>
	</table>
	</div>
</div>
<hr>
<?php 
	if(isset($_POST['btn']))
	{

		$id=$_POST['txt'];
		$sql="SELECT * FROM compLogin where id='$id'";
		$result = mysqli_query($con, $sql);

		while($row1 = mysqli_fetch_array($result))
	    {
	    	$compName=$row1['compName'];
	    	$drivedate=$row1['drivedate'];
	    	$reqskills=$row1['reqskills'];
	    	$eligibility=$row1['eligibility'];
	    	$rounddetail=$row1['rounddetail'];
	    	$filename=$row1['pdf_file'];
	    		?>

<div class="row">
	<p class="col-sm-2"></p>
	<form method="post" class="col-sm-4 form-group" enctype="multipart/form-data">
		<input type="text" name="compName" value='<?php echo $compName; ?>' hidden>
		<b>Drive Date :</b>
		<input type="date" name="drivedate" value='<?php echo $drivedate; ?>' class="form-control"><br>

		<b>Required Skills :</b>
		<textarea name="reqskills" class="form-control"><?php echo $reqskills; ?></textarea><br>

		<b>Eligibility Criteria :</b>
		<textarea name="eligibility" class="form-control"><?php echo $eligibility; ?></textarea><br>

		<b>Interview Round Details :</b>
		<textarea name="rounddetail" class="form-control"><?php echo $rounddetail; ?></textarea><br>
		<b>File Name :</b>
		<input type="text" name="filename" class="form-control" value="<?php echo $filename; ?>" readonly>
<br>
		<input type="submit" name="edit" class="btn btn-success">
	</form>
</div>
<?php
	    }	
	    echo $compName=$row1['compName'];
	}

	if (isset($_POST['edit'])) 
	{
		$compName=$_POST['compName'];
		$drivedate=$_POST['drivedate'];
	    $reqskills=$_POST['reqskills'];
	    $eligibility=$_POST['eligibility'];
	    $rounddetail=$_POST['rounddetail'];
	    $filename=$_POST['filename'];

	    $query="INSERT INTO admindrivedetails (`compName`, `drivedate`, `reqskills`, `rounddetail`, `eligibility`, `pdf_file`) VALUES('$compName', '$drivedate', '$reqskills', '$eligibility', '$rounddetail','$filename')";


		$run=mysqli_query($con,$query);
		if ($run==true)
		{

			echo '<script>alert("Done ! ! ! ")</script>';
		}
		else
			echo "$query";
			echo "<script>alert( Error!)</script>";	

	}

?>
<?php include 'footer.php';?>
</body>
</html>