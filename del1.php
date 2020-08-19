
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
require('main.php');
$AIRLINEID=$_REQUEST['AIRLINEID'];
$query = "SELECT * from airline where AIRLINEID='".$AIRLINEID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$disabled="";		
$query = "DELETE FROM airline WHERE AIRLINEID=$AIRLINEID"; 
$result= mysqli_query($con,$query) or die ( mysqli_error());
header("Location: airdetail.php"); 	
?>     
</body>
</html>
