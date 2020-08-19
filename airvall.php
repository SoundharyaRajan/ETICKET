<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
session_start();
?>
<?php
include "main.php";
if(isset($_POST['btn']))
{
$splace = mysqli_real_escape_string($con,$_POST['splace']);
$dplace= mysqli_real_escape_string($con,$_POST['dplace']);
if ($splace != "" && $dplace != "")
{
$sql_query = "select count(*) as cntUser from airline where STARTPLACE='".$splace."' and ENDPLACE='".$dplace."'";		
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];
echo $count;
if($count > 0)
{
$namesql = "SELECT * FROM airline WHERE STARTPLACE = '".$splace."' and ENDPLACE='".$dplace."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
                        $aid = $row['AIRLINEID'];
                        $startplace = $row['STARTPLACE'];
                        $endplace = $row['ENDPLACE'];
                        $stime = $row['STARTTIME'];
                        $dtime = $row['ENDTIME'];
                        $maxseats = $row['MAXSEATS'];
                        $availseats = $row['AVAILSEATS'];
                        $fare = $row['FARE'];
    $_SESSION['bid']=$bid;
	$_SESSION['startplace']=$startplace;
	$_SESSION['endplace']=$endplace;
	$_SESSION['stime']=$stime;
	$_SESSION['dtime']=$dtime;
	$_SESSION['maxseats']=$maxseats;
	$_SESSION['availseats']=$availseats;
	$_SESSION['availseats']=$availseats;
}
}
header("Location: airavailablee.php");
}
else{
?>
<script language="javascript">
alert("NO AIRLINES ARE AVILABLE");
window.location.href="airline.php"
</script>
<?php
 }
}}
?>








