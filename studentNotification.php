<!DOCTYPE html>
<html>
<head>
	<title>Student Notification </title>
</head>
<body class="container-fluid">
<?php 

include'adminHeader.php'; 
include'config.php';

$sql=" SELECT * FROM `tempstudent`";
$result = mysqli_query($con, $sql);

?>

<p class="container"></p>
<div class="table-responsive">          
  <table class="table table-hover col-sm-8">
   <h3>Student Notification :</h3>

<?php
$cnt=0;

while($row = mysqli_fetch_array($result))
    {
?>
    
      	<tr>
      		<form method="post" class="form-group">
      		<td><?php echo ++$cnt; ?></td>
      		<td><?php echo $row['student_name']; ?></td>
	        <td><?php echo $row['email']; ?></td>
	        <td><?php echo $row['contact']; ?></td>
	        <td><?php echo $row['gender']; ?></td>
	        <td><?php echo $row['skills']; ?></td>
	        <td><?php echo $row['qualification']; ?></td>
	        <td><?php echo $row['passyear']; ?></td>
	        <td><input type="submit" class="btn btn-success"  id="submit" value='Confirm' name='confirm'></td>
	        	<td><input type="submit" class="btn btn-danger" id="submit" value="Not Now" name='notnow'></td>
	        	<input type="text" name="uid" value=<?php echo$row['email'];  ?> readonly hidden ></td>
      		</form>
      		
	       
      	</tr>

<?php
	  
    }
	    if($cnt==0)
	    {
	    	echo"<tr><td><h3>No Notification</td></tr>";
	    }
?>
    </table>
  </div>

<?php

	if(isset($_POST['confirm']))
	{
	
			$value=$_POST['uid'];
			
			$query2="SELECT * FROM `tempstudent` WHERE email='$value'" ;

			$result = mysqli_query($con, $query2);
			while($row = mysqli_fetch_array($result))
			{
				
				$student_name=$row['student_name']; 
		        $email=$row['email']; 
		        $contact=$row['contact']; 
		        $gender=$row['gender']; 
		        $skills=$row['skills']; 
		        $qualification=$row['qualification']; 
		        $passyear=$row['passyear']; 
		        $pass1=$row['pass1'];
				$pass2=$row['pass2'];


			$query3="INSERT INTO student_reg VALUES('$student_name', '$email', '$contact', '$gender', '$skills', '$qualification','$passyear','$pass1','$pass2')";
			$run3=mysqli_query($con,$query3);
		}
			$query1="DELETE FROM `tempstudent` WHERE email='$value'";
			$run1=mysqli_query($con,$query1);
			
	}	

	if(isset($_POST['notnow']))
	{
	
			$value=$_POST['uid'];
			
			$query="DELETE FROM `tempstudent` WHERE email='$value'" ;
				
			$run=mysqli_query($con,$query);
			
			if($run==true)
			{
				echo "<script>alert(Student Data deleted Succsesfully !)</script>";
			}
			else
			{
				echo "error occur data is not deleted";
			}


	}
	include 'footer.php';
?>


</body>
</html>