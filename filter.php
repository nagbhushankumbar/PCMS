<?php

include'config.php';

session_start();
if(!isset($_SESSION['username'])){
    header("location:admin.php");
}
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `student_reg` WHERE CONCAT(`name`, `degreename`, `ssc`, `hsc`, `degree`, `sscyr`, `hscyr`, `degreeyr`, `skills`, `certifications`, `gender`, `file`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
     
}
 else {
    $query = "SELECT * FROM `student_reg`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include'config.php';   
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP HTML TABLE DATA SEARCH</title>
    <meta charset="utf-8">
    <script src="data.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="toast.css" rel="stylesheet">
    
</head>

<body class="container-fluid" style="font-family: verdana">
    <nav>
        <ul class="container-fluid nav navbar-nav navbar-right ">
                <li><a id="user" href="#" style="font-size:15px;color:white;background-color:#0c7c99;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['username'];?></a></li>
                <li><a id="user" href="logout.php" style="font-size:15px;color:white;background-color:#0c7c99;">Logout </a></li>
        </ul>
</nav>
    <?php include'adminHeader.php';?><br>
        <div class="container">
        <form action="filter.php" method="post" class ='col-sm-3'>
            <b>Enter Value to sort and search :</b><input type="text" class="form-control " name="valueToSearch" placeholder="Value To Search"><br>
            <b>Enter Value to Apply Filters :</b><input type="text" class="form-control col-sm-3" name="valueToSearch" placeholder="Value To Search"><br><br>
            </br><input type="submit" name="search" class="btn btn-info" value="FILTER"><br></br>
        <table id="example" class="table table-bordered table-hover">
            <tr style="background-color : teal; color: white">
                <th>Name</th>
                <th>Degree name</th>
                <th>SSC</th>
                <th>HSC</th>
                <th>DEGREE</th>
                <th>SSCYEAR</th>
                <th>HSCYEAR</th>
                <th>DEGREEYEAR</th>
                <th>SKILLS</th>
                <th>CERTIFICATIONS</th>
                <th>GENDER</th>
                <th>EMAIL</th>
            </tr>
    <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['degreename']; ?></td>
                <td><?php echo $row['ssc']; ?></td>
                <td><?php echo $row['hsc']; ?></td>
                <td><?php echo $row['degree']; ?></td>
                <td><?php echo $row['sscyr']; ?></td>
                <td><?php echo $row['hscyr']; ?></td>
                <td><?php echo $row['degreeyr']; ?></td>
                <td><?php echo $row['skills']; ?></td>
                <td><?php echo $row['certifications']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <?php endwhile;?>
            </table>
            <button id="csv" class="btn btn-success">Export to Excel</button> 
        </form>
    </div><br>
    <?php include'footer.php';?>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="src/tableHTMLExport.js"></script>
<script>
  $('#csv').on('click',function(){
    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
  })
</script>        
</html>
