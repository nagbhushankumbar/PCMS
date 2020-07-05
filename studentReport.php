<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PCMS-Student Report </title>
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
<body class="container-fluid" style="font-family: verdana">

<nav>
		<ul class="container-fluid nav navbar-nav navbar-right ">
	      		<li><a id="user" href="#" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['username'];?></a></li>
	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout </a></li>
	    </ul>
    </nav>

<?php include'adminHeader.php';?>
<!--Closing of header part-->

<?php include'config.php'; ?>

<?php

$sql=" SELECT * FROM `student_reg`";
$result = mysqli_query($con, $sql);

?>
<div class="table-responsive">     
	<h2>Student details : </h2>              
  <table class="table table-bordered table-hover">
    <tr class="info">
        <th>Student Name</th>
        <th>Degree Name</th>
        <th>PRN Number </th>
        <th>SSC Percentage</th>
        <th>HSC Percentage</th>
        <th>Degree Percentage</th>
        <th>SSC Passing Year</th>
        <th>HSC Passing Year</th>
        <th>Degree Passing Year </th>
        <th>Skills</th>
        <th>Certification</th>
        <th>Gender</th>
        <th>Resume</th>
        <th>Address</th>
        <th>Contact </th>
        <th>Email</th>    
    </tr>
    </th>
<?php
while($row = mysqli_fetch_array($result))
    {
?>
    <tbody>
      	<tr>
	        <td><?php echo $row['name']; ?></td>
	        <td><?php echo $row['degreename']; ?></td>
	        <td><?php echo $row['prn']; ?></td>
	        <td><?php echo $row['ssc']; ?></td>
	        <td><?php echo $row['hsc']; ?></td>
	        <td><?php echo $row['degree']; ?></td>
	        <td><?php echo $row['sscyr']; ?></td>
	        <td><?php echo $row['hscyr']; ?></td>
	        <td><?php echo $row['degreeyr']; ?></td>
	        <td><?php echo $row['skills']; ?></td>
			<td><?php echo $row['certifications']; ?></td>
	        <td><?php echo $row['gender']; ?></td>
	        <td><a target="_blank" class="btn btn-info" type="application/octet-stream" href='resume/<?php echo $row['file']?>'>View Resume</a></td>
	        <td><?php echo $row['address']; ?></td>
	        <td><?php echo $row['mobile']; ?></td>
	        <td><?php echo $row['email']; ?></td>
	  	</tr>
    </tbody>
<?php
	  
    }
?>
    </table>
  </div>

<?php 
mysqli_close($con);
?>

<?php include'footer.php' ?>

</body>
</html>