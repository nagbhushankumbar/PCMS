<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>

</head>
<body class="container-fluid">
<nav>
		<ul class="container-fluid nav navbar-nav navbar-right ">
	      		<li><a id="user" href="#" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['username'];?></a></li>



	      		<li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout </a></li>
	    </ul>
    </nav>
<?php
	include 'adminHeader.php';
	include'config.php'; 


$sql=" SELECT * FROM `tempcompany`";
$result = mysqli_query($con, $sql);

?>
<p class="container"></p>
<div class="table-responsive">          
  <table class="table table-hover col-sm-8">
  	<h3>Company Notification :</h3>
   
<?php
$cnt=0;

while($row = mysqli_fetch_array($result))
    {
?>
    
      	<tr>
      		<form method="post" class="form-group">
      		<td><?php echo ++$cnt; ?></td>
      		<td><?php echo $row['compnay_name']; ?></td>
	        <td><?php echo $row['compnay_details']; ?></td>
	        <td><?php echo $row['email']; ?></td>
	        <td><?php echo $row['cperson']; ?></td>
	        <td><input type="submit" class="btn btn-success"  id="submit" value='Confirm' name='confirm'>
	        	<td><input type="submit" class="btn btn-danger" id="submit" value="Not Now" name='notnow'>
	        	<input type="text" name="uid" value=<?php echo$row['email'];  ?> readonly hidden></td>
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
			
			$query2="SELECT * FROM `tempcompany` WHERE email='$value'" ;
			

			$result = mysqli_query($con, $query2);
			while($row = mysqli_fetch_array($result))
			{
				$compnay_name=$row['compnay_name'];
				$compnay_details=$row['compnay_details'];
				$email=$row['email'];
				$cperson=$row['cperson'];
				$pass1=$row['pass1'];
				$pass2=$row['pass2'];
			

			$query3="INSERT INTO company_reg VALUES('$compnay_name', '$compnay_details', '$email', '$cperson', '$pass1', '$pass2')";
			$run3=mysqli_query($con,$query3);
		}
			$query1="DELETE FROM `tempcompany` WHERE email='$value'";
			$run1=mysqli_query($con,$query1);
			
	}	

	if(isset($_POST['notnow']))
	{
	
			$value=$_POST['uid'];
			//echo $value;
			$query="DELETE FROM `tempcompany` WHERE email='$value'" ;
				
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