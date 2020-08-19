<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mySlides {display:none;}
body {font-family: Arial, Helvetica, sans-serif;}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}
.navbar a:hover {
  background-color: #000;
}
.active {
  background-color: #4CAF50;
}
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
}
}
</style>
<body>
<div class="navbar">
<a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
<a href="traindetail.php"><i class="fa fa-fw fa-search"></i> Train Details</a>   
<a href="userdetail.php"><i class="fa fa-fw fa-user"></i> User Details</a>
</div>
<center><br>
<h1><font color="red">WELCOME ADMIN!</font></h1>
<div  class="w3-content w3-section" style="max-width:800px">
<img class="mySlides w3-animate-left" src="trainy.jpg"  style="width:800px;height:400px;border:0">
<img class="mySlides w3-animate-right" src="trains.png" style="width:800px;height:400px;border:0">
<img class="mySlides w3-animate-top" src="trainn.jpg" style="width:800px;height:400px;border:0">
</div>
</center>
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
 setTimeout(carousel, 2500);    
}
</script>
</body>
</html> 
