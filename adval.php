<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN LOGIN VALIDATION</title>
</head>
<body>
<?php 
session_start();
?>
<?php
include "main.php";
if(isset($_POST['submit'])){
$admin = mysqli_real_escape_string($con,$_POST['admin']);
$password = mysqli_real_escape_string($con,$_POST['password']);
if ($admin != "" && $password != ""){
$sql_query = "select count(*) as cntUser from adlogin where NAME='".$admin."' and PASSWORD='".$password."'";		
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];
if($count > 0){	
$namesql = "SELECT * FROM adlogin WHERE NAME = '".$admin."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
$password=$row["PASSWORD"];
$admin=$row["NAME"];
$_SESSION['password']=$password;
}
}
$_SESSION['admin'] = $admin;
header("Location: adselect.php");			
}else{
?>
<script language="javascript">
alert("INCORRECT USER NAME OR PASSWORD");
window.location.href="adlogin.php"
</script>
<?php		
}
}
$UNAME = "SELECT USERNAME FROM msbt WHERE username = '".$uname."' and PASSWORD='".$password."'";
}
?>
</body>
</html>
