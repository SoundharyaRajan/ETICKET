<!DOCTYPE html>
<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>REGISTERATION</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script> 
function REGISTERATION()                                    
{ 
    var name = document.forms["RegForm"]["usrnm"];               
    var email = document.forms["RegForm"]["email"];    
    var phone = document.forms["RegForm"]["mobile"];  
    var age =  document.forms["RegForm"]["age"];  
    var password = document.forms["RegForm"]["psw"]; 
    var confpass = document.forms["RegForm"]["confpsw"];  
    var address = document.forms["RegForm"]["address"];  
   
       if (name.value == "")                                  
    { 
        window.alert("Please enter your name"); 
        name.focus(); 
        return false; 
    } 
     if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    } 
   
    if (confpass.value == "")                  
    { 
        alert("Please Re-enter your password."); 
        what.focus(); 
        return false; 
    } 
    if (email.value == "")                                   
    { 
      
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
    
        if (phone.value == "")                           
    { 
        window.alert("Please enter your Mobile number."); 
        phone.focus(); 
        return false; 
    } 
      
    if (age.value == "")                  
    { 
        alert("Please enter your age."); 
        what.focus(); 
        return false; 
    } 
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
        return false; 
    }        
    return true; 
}</script> 
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body {
  background-image: url('log.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid dodgerblue;
}
/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<a href=login.php>HOME</a>
<center>
<form name="RegForm" action="" style="max-width:500px;margin:auto" onsubmit="return REGISTERATION()" method="post">
<input type="hidden" name="new" value="1"/>
<h2>Registeration Form</h2>
<div class="input-container">
<i class="fa fa-user icon"></i>
<input class="input-field" type="text" placeholder="Username" name="usrnm">
</div>
<div class="input-container">
<i class="fa fa-key icon"></i>
<input class="input-field" type="password" placeholder="Password" name="psw">
</div>
<div class="input-container">
<i class="fa fa-key icon"></i>
<input class="input-field" type="password" placeholder="Confirm Password" name="confpsw">
</div>
<div class="input-container">
<i class="fa fa-envelope icon"></i>
<input class="input-field" type="text" placeholder="Email" name="email">
</div>
<div class="input-container">
<i class="fa fa-mobile icon" style='font-size:25px'></i>
<input class="input-field" type="text" placeholder="Mobile no" name="mobile">
</div>
<div class="input-container">
<i class="fa fa-calendar icon"></i>
<input class="input-field" type="text" placeholder="Age" name="age">
</div>
<div class="input-container">
<i class="fa fa-address-card icon"></i>
<textarea class="input-field" rows="3" cols="40" type="text area" placeholder="Address" name="add"></textarea>
</div>
Gender:<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label> <br><br>
<button type="submit" class="btn">Register</button>
</form>
</center>
<?php
require('main.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){   
    $uname =$_REQUEST['usrnm'];
    $psw = $_REQUEST['psw'];
    $confpsw = $_REQUEST['confpsw'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $add = $_REQUEST['add'];
  
    $ins_query="insert into register
    (`USERNAME`,`PASSWORD`,`CONFIRMPASSWORD`,`EMAIL`,`MOBILENO`,`AGE`,`GENDER`,`ADDRESS`)values
    ('$uname','$psw','$confpsw','$email','$mobile','$age','$gender','$add')";
 if(mysqli_query($con,$ins_query))
    {
   ?>   
<script language="javascript">
alert("YOU ARE REGISTERED SUCCESFULLY"); 
window.location.href="login.php"
</script>
<?php
} 
else{
?>
<script language="javascript">
alert("FAILED TO REGISTER");
window.location.href="login.php"
</script>
<?php   
}
}
?>
</body>
</html>
