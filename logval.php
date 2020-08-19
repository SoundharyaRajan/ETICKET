<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGIN VALIDATION</title>
</head>
<body>
<?php 
session_start();
?>
<?php
include "main.php";
if(isset($_POST['but_submit'])){
$uname = mysqli_real_escape_string($con,$_POST['uname']);
$password = mysqli_real_escape_string($con,$_POST['psw']);
if ($uname != "" && $password != ""){
$sql_query = "select count(*) as cntUser from register where USERNAME='".$uname."' and PASSWORD='".$password."'";		
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];
if($count > 0){		
$namesql = "SELECT * FROM register WHERE USERNAME = '".$uname."'";
$result = mysqli_query($con,$namesql);
$_SESSION['uname'] = $uname;
header("Location: welcome.php");		
}
else{
?>
<script language="javascript">
alert("INCORRECT USER NAME OR PASSWORD");
window.location.href="login.php"
</script>
<?php
}
}
$UNAME = "SELECT USERNAME FROM msbt WHERE username = '".$uname."' and PASSWORD='".$password."'";
}
?>
</body>
</html>
