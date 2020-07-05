
<html>
 <head>
  <title>Student Registration Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <script src="jquery-3.4.1.min.js"></script>
  <script src="validate.js"></script>
  <style>
  .box
  {
   width:900px;
   margin:0 auto;
   background-color:#0c7c99;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  label.error{color:red}
  </style>
<script>
  $(document).ready(function(){
    $("#register_form").validate({
        rules:{
            name:{
                  required:true
                 },
            degreename:{
                  required:true
                  },
            prn:{
                  required:true,
                  minlength:10,
                  maxlength:10
                 },
            ssc:{
                  required:true
            },
            hsc:{
                  required:true
            },
            degree:{
                  required:true
            },
            skills:{
                required:true
            },
            file:{required:true
            },
            address:{
                  required:true
                 },
            mobile:{required:true,
                    minlength:10
            },
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength:5,
                maxlength:15
               }
            },//End of rules
        
        messages:{
              
              name:{required:"Student name is Required"},
              degreename:{required:"Enter Name of Course Completed"},
              prn:{required:"Enter Your PRN Number"},
              ssc:{required:"Enter 10th %"},
              hsc:{required:"Enter 12th %"},
              degree:{required:"Enter Degree's %"},
              address:{required:"Enter your Permanent Address"},
              mobile:{required:"Enter your 10 digit Contact Number"},
              email:{required:"Please Enter your Email Address"},
              password:{required:"Enter Your Password",
                  minlength:jQuery.validator.format("Enter at least {0} characters")
                  }
             }//End of messages

      }); //End of validate
    $("#btn_personal_details").click(function(){
       $("#register_form").valid();
     });
    $("#btn_contact_details").click(function(){
       $("#register_form").valid();
     });
     $("#btn_login_details").click(function(){
        $("#register_form").valid();
      });//End of jQuery
  });
</script>

 </head>
 <body>
<?php include'header.php'; ?>
 <form method="POST" id="register_form" action="data.php" enctype="multipart/form-data">
 <br />

  <div class="container box">
   <br />
   <h2 align="center">Student Registration Form</h2><br />
   
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1"  id="list_login_details "style="border:1px solid #ccc">Login Details</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     
     <div class="tab-pane active" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Personal Details</div>
       <div class="panel-body">
        <div class="form-group">
   
         <label>Enter your Full Name</label>
         <input type="text" name="name" id="name" class="form-control" />
        </div>
        <div class="form-group">
         <label>Enter Name of Degree Persued</label>
         <input type="text" name="degreename" id="degreename" class="form-control" />
        </div>
        <div class="form-group">
         <label>Enter your PRN Number</label><input type="number" maxlength="10" name="prn" id="prn" class="form-control-inline" />
        </div>
        <div class="form-group">
         <label>Enter Qualification Details</label></br>
         <label>SSC %</label><input type="text" name="ssc" id="ssc" class="form-control-inline" />
         <label>HSC %</label><input type="text" name="hsc" id="hsc" class="form-control-inline" />
         <label>Degree %</label><input type="text" name="degree" id="degree" class="form-control-inline" /><br><br>
         <label>Year Of Passing</label><input type="text" name="sscyr" id="sscyr" placeholder="Enter SSC Passing Year" class="form-control-inline" />
         <label>    </label><input type="text" name="hscyr" id="hscyr" placeholder="Enter HSC Passing Year" class="form-control-inline" />
         <label>    </label><input type="text" name="degreeyr" id="degreeyr" placeholder="Enter Degree Passing Year"class="form-control-inline" />
        </div>
        <div class="form-group">
         <label>Enter your Skills</label>
         <textarea name="skills" id="skills" class="form-control"></textarea>
        </div>
        <div class="form-group">
         <label>Enter if any Certifications / Course done</label>
         <input type="text" name="certifications" id="certifications" class="form-control"/>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="female"> Female
         </label>
         <label class="radio-inline">
          <input type="file" name="pdf_file" value="file" accept="application/pdf">Upload Your Resume Here
         </label>
        </div>
        <br />
        <div align="center">
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Contact Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Your Permanent Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile" id="mobile" class="form-control" />
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn__details" id="btn_contact_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Login Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Email Address</label>
         <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
         <label>Enter Password</label>
         <input type="password" name="password" id="password" class="form-control" />
        </div>
        <br />
        <div align="center">
          <button type="button" name="previous_btn_login_details" id="previous_btn_login_details" class="btn btn-default btn-lg">Previous</button>
         <input type="submit" name="btn_login_details" id="btn_login_details" class="btn btn-success btn-lg">
         
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>


  </div>
     </form>
     <?php include'footer.php'; ?>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_personal_details').click(function(){
  var name = '';
  var prn = '';
  
  if(name != '' || prn != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
  $('#btn_contact_details').click(function(){
  var error_address = '';
  var error_mobile_no = '';  
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#list_contact_details').removeClass('active active_tab1');
   $('#list_contact_details').removeAttr('href data-toggle');
   $('#contact_details').removeClass('active');
   $('#list_contact_details').addClass('inactive_tab1');
   $('#list_login_details').removeClass('inactive_tab1');
   $('#list_login_details').addClass('active_tab1 active');
   $('#list_login_details').attr('href', '#login_details');
   $('#list_login_details').attr('data-toggle', 'tab');
   $('#login_details').addClass('active in');
  }
 });
 
 $('#previous_btn_login_details').click(function(){
  $('#list_login_details').removeClass('active active_tab1');
  $('#list_login_details').removeAttr('href data-toggle');
  $('#login_details').removeClass('active in');
  $('#list_login_details').addClass('inactive_tab1');
  $('#list_contact_details').removeClass('inactive_tab1');
  $('#list_contact_details').addClass('active_tab1 active');
  $('#list_contact_details').attr('href', '#contact_details');
  $('#list_contact_details').attr('data-toggle', 'tab');
  $('#contact_details').addClass('active in');
 });
 
  $('#btn_login_details').click(function(){
  var email = '';
  var password = '';  
  if(email != '' || password != '')
  {
   return false;
  }
  else
  {
   $('#btn_login_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  } 
 });
 });
</script>