<?php 
  //echo "<script>alert('congrats $name You has Registred Successfully..!!')</script>";
    include'config.php';
    
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
    $gender=$_POST['gender'];
    
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
//file upload
    $upload_file=$_FILES['pdf_file']['name'];
    $allow=array('pdf');
    $temp=explode(".", $_FILES['pdf_file']['name']);
    $extension=end($temp);
  
    move_uploaded_file($_FILES['pdf_file']['tmp_name'],"resume/".$_FILES['pdf_file']['name']);
//end file upload

    $sql=" SELECT * FROM `prntable`";
    $result = mysqli_query($con, $sql);
    $flag=0;
        while($row = mysqli_fetch_array($result))
        {
            if($row['prn']==$prn)
            {

                    $flag=1;
            }
        }

        if($flag==1)
        {
           $query="INSERT INTO student_reg VALUES ('$name','$degreename','$prn','$ssc','$hsc','$degree','$sscyr','$hscyr','$degreeyr','$skills','$certifications','$gender','$upload_file','$address','$mobile','$email','$password')";
                
                $run=mysqli_query($con,$query);
                
                if($run==true)
                {   
                    echo "<script>alert('congrats $name Registration Done..!!')</script>";
                    echo '<script>window.location="home.php"</script>'; 
                }
                else
                {
                    echo "<script>alert('error occur data are not inserted')</script>";
                     echo '<script>window.location="reg1.php"</script>'; 
                }
                
        }
        else
            echo "<script>alert('Not valid student..!!')</script>";
  
?>