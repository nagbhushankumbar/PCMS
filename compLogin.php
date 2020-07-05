<?php 
	session_start();
	if(!isset($_SESSION['comp_name']))
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
	<title>Company Drive Details</title>

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

	<nav>
		<ul class="container-fluid nav navbar-nav navbar-right ">
	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Hello <?php echo $_SESSION['comp_name']; ?> </a></li>
	    </ul>
    </nav>

	<?php include'header.php'; ?>
	<?php include'config.php' ?>

<div class="container-fluid" style="border:2px solid maroon;">
	
	<form id="register" method="post" class="form-group shadow-textarea" enctype="multipart/form-data">
		
		<div class="col-sm-4">
		<p style="text-align: right; font-size: 30px; font-weight: bold;padding-top: 10px;">Company Drive Details </p>
						

			<b>Drive Date :</b> <input type="date" name="drivedate" class="form-control" placeholder="Company Name"><br>
	
			<b>Required Skills : </b><textarea name="reqskills" class="form-control" placeholder="Company Details" ></textarea><br>
			
			<b>Interview Round Details :</b> <textarea name="rounddetail" class="form-control" placeholder="Enter Interview/Pannel Round Details " required></textarea><br>

			<b>Eligibility Criteria :</b> <textarea name="eligibility" class="form-control" placeholder="Enter min Percentage required & Qualification details"></textarea><br>
				
			<input type="file" name="pdf_file" value="file" accept="application/pdf" class="form-control"><b>Upload File</b> <br><br>

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
				<td>Track 1(Software & Application Development)</td>
				<td>IT</td>
			</tr>
			<tr>
				<td>Track 2(Infrastructure & Security)</td>
				<td>Marketing</td>
			</tr>

			<tr>
				<td>Track 3(QC)</td>
				<td>Human Resource</td>
			</tr>

			<tr>
				<td>Track 4(Networking)</td>
				<td>Bussiness Essentials</td>
			</tr>
		</table>
		<img src="pics/png.png" style="height: auto;">
	</div>

</div>	<!--Registration Close-->
<!--database new-->
<?php 
	$comp_name=$_SESSION['comp_name'];
	if(isset($_POST['submit']))
	{

		$drivedate=$_POST['drivedate'];
		$reqskills=$_POST['reqskills'];
		$rounddetail=$_POST['rounddetail'];
		$eligibility=$_POST['eligibility'];

		//file upload
	    $upload_file=$_FILES['pdf_file']['name'];
	    $allow=array('pdf');
	    $temp=explode(".", $_FILES['pdf_file']['name']);
	    $extension=end($temp);
	    move_uploaded_file($_FILES['pdf_file']['tmp_name'],"file/".$_FILES['pdf_file']['name']);
//end file upload
			
		$query="INSERT INTO complogin (`compName`, `drivedate`, `reqskills`, `rounddetail`, `eligibility`, `pdf_file`) VALUES('$comp_name','$drivedate', '$reqskills', '$rounddetail', '$eligibility','$upload_file')";
		
		//echo "$query";

		$run=mysqli_query($con,$query);
		
		if($run==true)
		{	
			echo "<script>alert('Record inserted Succsesfully')</script>";
		}
		else
		{
			echo "<script>alert('error occur data are not inserted')</script>";
		}

	}	
}
?>


	<?php include'footer.php'; ?>

</body>
</html>