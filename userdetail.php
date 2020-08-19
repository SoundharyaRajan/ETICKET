<!DOCTYPE html>
<html>
<head>
<title>USER DETAILS</title>
<style>
body {
  background-image: url('welc.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: #ffffff;
}
th, td {
  padding: 15px;
}
th {
  text-align: left;
}
.btn {
  background-color: green;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body><center>
<h1><font color="yellow">USER DETAILS</font></h1></center>
<?php
include "main.php";
$namesql = "SELECT * FROM register ";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
?>
<table style="width:100%">
	<tr>
    <th><font color="red">USER NAME</font></th>
    <th><font color="red">EMAIL ID</font></th>
    <th><font color="red">MOBILE NUMBER</font></th>
    <th><font color="red">AGE</font></th>
    <th><font color="red">GENDER</font></th>
    <th><font color="red">ADDRESS</font></th>
  </tr>
<?php
while($row = mysqli_fetch_assoc($result)) 
{
                        $user = $row['USERNAME'];
                        $email = $row['EMAIL'];
                        $mob = $row['MOBILENO'];
                        $age = $row['AGE'];
                        $gen = $row['GENDER'];
                         $add = $row['ADDRESS'];
  $_SESSION['user']=$user;
	$_SESSION['email']=$email;
	$_SESSION['mob']=$mob;
	$_SESSION['age']=$age;
	$_SESSION['gen']=$gen;
	$_SESSION['add']=$add;
?>
<tr>
    <td><?php echo $_SESSION["user"];?></td>
    <td><?php echo $_SESSION["email"];?></td>
    <td><?php echo $_SESSION["mob"];?></td>
    <td><?php echo $_SESSION["age"];?></td>
    <td><?php echo $_SESSION["gen"];?></td>
    <td><?php echo $_SESSION["add"];?></td>
<?php
}
}
?>
</table>
<br><center>
<button onClick="myFunction()" class="btn">
<div align="center">Print Details</div>
</button><script>
function myFunction() {
window.print();
}</script>
</center>
</body>
</html>