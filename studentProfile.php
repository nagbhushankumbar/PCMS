<?php 
global $email1;
session_start();
$email1= $_SESSION['email'];
//$email1=$_SESSION['email']; 

include'header.php';?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="container-fluid">

<?php
	$con= mysqli_connect("localhost","root","","pcms");

	$sql = " SELECT * FROM student_reg where email='$email1'";
	
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_array($result))
	{
		$name=$row['name'];
	    $degreename=$row['degreename'];
	    $prn=$row['prn'];
	    $ssc=$row['ssc'];
	    $hsc=$row['hsc'];
	    $degree=$row['degree'];
	    $sscyr=$row['sscyr'];
	    $hscyr=$row['hscyr'];
	    $degreeyr=$row['degreeyr'];
	    $skills=$row['skills'];
	    $certifications=$row['certifications'];
	    $gender=$row['gender'];
	    $file=$row['file'];
	    
	    $address=$row['address'];
	    $mobile=$row['mobile'];
	    
	    $email=$row['email'];
	    $password=$row['password'];
	}

	if(isset($_POST['update']))
	{

		$name=$_POST['name'];
	    $degreename=$_POST['degreename'];
	    $prn=$_POST['prn'];
	    $ssc=$_POST['ssc'];
	    $hsc=$_POST['hsc'];
	    $degree=$_POST['degree'];
	    $sscyr=$_POST['sscyr'];
	    $hscyr=$_POST['hscyr'];
	    $degreeyr=$_POST['degreeyr'];
	    $skills=$_POST['skills'];
	    $certifications=$_POST['certifications'];
	    //$gender=$_POST['gender'];
	   // $file=$_POST['file'];
	    
	    //$address=$_POST['address'];
	    $mobile=$_POST['mobile'];
	    
	    $email=$_POST['email'];
	    $password=$_POST['password'];

		$sql = " update student_reg set name='$name',degreename='$degreename',prn='$prn',ssc='$ssc',hsc='$hsc',degree='$degree',sscyr='$sscyr',hscyr='$hscyr',degreeyr='$degreeyr',skills='$skills',certifications='$certifications',mobile='$mobile' where email='$email1'";

		$result = mysqli_query($con, $sql);
		if ($result==true) 
		{
			echo "<script>alert('Successfully Updated Profile ! ')</script>";
		}

	}
?>

<div class="row">
	<p class="col-sm-1"></p>
	<div class="col-sm-4">
		<h3>Update Student profile :</h3>
			<form class="form-group" method="post">
				<b>Student name :</b>
				<input type="text" class="form-control" name="name" value='<?php echo $name; ?>' readonly><br>
				<b>Degree name :</b>
				<input type="text" class="form-control" name="degreename" value='<?php echo $degreename; ?>'><br>
				<b>PRN Number:</b>
				<input type="text" class="form-control" name="prn" value='<?php echo $prn; ?>'><br>
				<b>SSC Percentage :</b>
				<input type="text" class="form-control" name="ssc" value='<?php echo $ssc; ?>' ><br>
				<b>HSC Percentage :</b>
				<input type="text" class="form-control" name="hsc" value='<?php echo $hsc ?>' ><br>
				<b>Degree Percentage :</b>
				<input type="text" class="form-control" name="degree" value='<?php echo $degree ?>'><br>
				<b> SSC Passing Year :</b>
				<input type="text" class="form-control" name="sscyr" value='<?php echo $sscyr ?>'><br>
				<b>HSC  Passing Year :</b>
				<input type="text" class="form-control" name="hscyr" value='<?php echo $hscyr ?>'><br>
				<b>Degree Passing Year :</b>
				<input type="text" class="form-control" name="degreeyr" value='<?php echo $degreeyr ?>'><br>
				<b>Skills :</b>
				<textarea name="skills" class="form-control">'<?php echo $skills ?>' </textarea> <br>
				<b>Certification :</b>
				<input type="text" class="form-control" name="certifications" value='<?php echo $certifications ?>'><br>
				<b>Contact Number :</b>
				<input type="text" class="form-control" name="mobile" value='<?php echo $mobile ?>'><br>
				
				<b>Email :</b>
				<input type="email" class="form-control" name="email" value='<?php echo $email ?>' readonly><br>
				<b>Password :</b>
				<input type="email" class="form-control" name="password" value='<?php echo $password ?>' readonly><br>
				<button class="btn btn-success" name="update">Update</button>

				<button class="btn btn-danger">Cancel</button>
			</form>
	</div>

</div>
<?php include'footer.php';?>
</body>
</html>