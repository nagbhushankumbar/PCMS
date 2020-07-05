<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:admin.php");
}else{

?>
<!DOCTYPE html>
<html>
<head>
	<title>IICMR PLACEMENT CELL</title>

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
	#drp1
	{	
		color: white;
	}
	#drp1:hover
	{
		color: black;
	}

	#drp
	{	
		color: white;
	}
	#drp:hover
	{
		color: black;
	}
</style>
</head>
<body class="container-fluid">




<nav>
		<ul class="container-fluid nav navbar-nav navbar-right ">
	      		<li><a id="user" href="#" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['username'];?> <span class="glyphicon glyphicon-user"></a></span></li>



	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout </a></li>
	    </ul>
    </nav>


<?php include'adminHeader.php';?>
<?php include'config.php' ?>


<!--Insertion of Notification -->
<div class="row">
	<p class="col-sm-1"></p>
	<div class="col-sm-4">
		<form action="" method="POST" class="form-group">
			<h2 style="font-weight: bold;">Notification :</h2>
		<b>Enter the Notification :</b><input type="text" name="notify" class="form-control"/><br>
		<b>Enter the Id to Delete Notifications :</b><input type="text" name="id" class="form-control"/><br>
		<input type="submit" name="insertnoti" class="btn btn-success" value="submit"/>
		<input type="submit" name="deletenoti" class="btn btn-success" value="Delete Notification"/>
		<input type="submit" name="viewnoti" class="btn btn-success" value="View Updates"/>
		</form>
	</div>
	<p class="col-sm-1"></p> 
	<form method="post" class="form-group col-sm-4" >
	<h2 style="font-weight: bold;">Details of Placed Students :</h2>
			<b> Student Name : </b>
			<input type="text" class="form-control" name="student_name" /><BR>
			<b>Email ID : </b>
			<input type="email" class="form-control" name="email" /><span>Enter Email ID to Delete Student Record.</span><BR>
			<b>class : </b>
			<input type="text" class="form-control" name="class" /><BR>
			<b>Company Name : </b>
			<input type="text" class="form-control" name="compnayname" /><BR>

<!--Start of placed Buttons-->
	
		<input type="submit" class="btn btn-success" name="add_student" value="Add Student">
	
		<input type="submit" class="btn btn-success" name="delete_student" value="Delete Student">
	
		<input type="submit" class="btn btn-success" name="view_record" value="View Students">
<!--End of placed Buttons-->	
	</form>


</div>


<!--End of Insertion of Notification -->

	<?php 	
	
	//for insert Placed student record.
	if(isset($_POST['add_student']))
	{
			$student_name=$_POST['student_name'];
			$email=$_POST['email'];
			$class=$_POST['class'];
			$compnayname=$_POST['compnayname'];
		
		$query="INSERT INTO `addstudent`(`student_name`, `email`, `class`, `compnayname`) VALUES ('$student_name','$email','$class','$compnayname')";
		
		$run=mysqli_query($con,$query);
	
	if($run==true)
	{
		echo "<script>alert('Data inserted Succsesfully.')</script>";
	}
	else
	{
		echo "<script>alert('error occur Please try again !')</script>";
	}

	}
	
	//for delete record.
	
	if(isset($_POST['delete_student']))
	{
		$email=$_POST['email'];
		
		
		$query="DELETE FROM `addstudent` WHERE email='$email'" ;
		
		$run=mysqli_query($con,$query);
	
	if($run==true)
	{
		echo "<script>alert('Student Data deleted Succsesfully !')</script>";
	}
	else
	{
		echo "error occur data is not deleted";
	}

	}
	//to view all records
	
	if(isset($_POST['view_record']))
	{
		$class=$_POST['class'];
		
		
		$query="SELECT * FROM `addstudent` order by compnayname" ;
		
		echo '<table border="2" class="table table-striped"  > 
      <tr> 
          <th> <font face="verdana">Student Name</font> </th> 
          <th> <font face="verdana">Email Address</font> </th>
          <th> <font face="verdana">Class</font> </th>
          <th> <font face="verdana">Compnay Name</font> </th>
      </tr>';
 
if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $student_name = $row["student_name"];
        $email = $row["email"];
        $class = $row["class"];
        $compnayname = $row["compnayname"];
 
        echo '<tr> 
                  <td>'.$student_name.'</td> 
                  <td>'.$email.'</td> 
                  <td>'.$class.'</td> 
                  <td>'.$compnayname.'</td> 
              </tr>';
    }
    $result->free();
}
} echo"<br>";

?>

<?php 	
	
	if(isset($_POST['insertnoti']))
	{
		$notify=$_POST['notify'];
		$query="INSERT INTO `updates`(`notify`)VALUES('$notify')";
			
			$run=mysqli_query($con,$query);
		
		if($run==true)
		{
			echo "<script>alert('Notification inserted Succsesfully.')</script>";
		}
		else
		{
			echo "error occur Please try again !";
		}
	}

	//for delete Notification.
	
	if(isset($_POST['deletenoti']))
	{
		$id=$_POST['id'];
		$query="DELETE FROM `updates` WHERE id='$id'" ;
		
		$run=mysqli_query($con,$query);
	
	if($run==true)
	{
		echo "<script>alert('Notification deleted Succsesfully !')</script>";
	}
	else
	{
		echo "error occur data is not deleted";
	}

	}
	//to view all notifications
	
	if(isset($_POST['viewnoti']))
	{
		$notify=$_POST['notify'];
		$query="SELECT * FROM `updates`" ;
		
		echo '<table border="2" class="table table-striped"  >  
      <tr> 
          <th> <font face="verdana">ID</font> </th> 
          <th> <font face="verdana">Notifications</font> </th> 
      </tr>';
 
if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $notify = $row["notify"];
        
        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$notify.'</td> 
              </tr>';
    }
    $result->free();
}
} 
?>
<div>

</div></div>
</body>
</html>
<?php } ?>

