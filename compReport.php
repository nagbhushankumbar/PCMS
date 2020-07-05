<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PCMS-Company Report </title>
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
	      		<li><a id="user" href="#" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo$_SESSION['username'];?></a></li>
	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout </a></li>
	    </ul>
    </nav>
<?php include'adminHeader.php';?>
<?php include'config.php'; ?>
<?php
	

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql=" SELECT * FROM `company_reg`";
$result = mysqli_query($con, $sql);

?>
<div class="table-responsive"> 
	<h2>Company details : </h2>         
  <table class="table table-bordered table-hover">
    <thead>
      <tr class="info">
        <th>Company Name</th>
        <th>Company Details</th>
        <th>Email</th>
        <th>Contact Person</th>
      </tr>
    </thead>
<?php
while($row = mysqli_fetch_array($result))
    {
?>
    <tbody>
      	<tr>
	        <td><?php echo $row['compnay_name']; ?></td>
	        <td><?php echo $row['compnay_details']; ?></td>
	        <td><?php echo $row['email']; ?></td>
	        <td><?php echo $row['cperson']; ?></td>
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