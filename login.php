<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>LOGIN PAGE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mySlides {display:none;}
body {font-family: Arial, Helvetica, sans-serif;}
body {
background-color: #ffffff;}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
body {
  background-image: url('mount.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
span.psw {
     display: block;
     float: none;
}
.cancelbtn {
     width: 100%;
}
}
</style>
</head>
<body>
<a href=index.php  style="color:#ffffff;">HOME</a>
<center>
<h1><font color="#ff0066">WELCOME TO E-TICKETING!</font></h1><br>
<div class="w3-content w3-section" >
<img class="mySlides w3-animate-top" src="bushd.jpg" width="800" height="400">
<img class="mySlides w3-animate-left" src="trains.png" width="800" height="400">
<img class="mySlides w3-animate-right" src="airs.jpg" width="800" height="400">
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
setTimeout(carousel, 3500);    
}
</script>
<br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login Here</button><br><br>
<a href="register.php" style="color:#ffffff;">Register Now!</a>
</center>
<div id="id01" class="modal">
<form class="modal-content animate" action="logval.php" method="post" style="max-width:500px;margin:auto">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
<img src="avatar.png" alt="Avatar" class="avatar" style="width:200px;height:190px;border:0>
</div>
<div class="container">  
<br><br><br><i class="fa fa-user icon"></i> <label for="uname"><b>Username</b></label><br> 
<input type="text" placeholder="Enter Username" name="uname" id="uname"  required> <br> 
<i class="fa fa-key icon"></i>   
<label for="psw"><b>Password</b></label><br>      
<input type="password" placeholder="Enter Password" name="psw" id="psw" required>        
<button type="submit" name="but_submit" id="but_submit">Login</button>
<label>
<input type="checkbox" checked="checked" name="remember"> Remember me
</label>
</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<span class="psw"> Forgot<a href="#">  Password?</a></span>
</div>
</form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
}
}
</script>
</body>
</html>
