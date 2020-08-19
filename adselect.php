<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
</head>
<body>
<?php 
session_start();
?>
<center><br>
<h1>WELCOME TO E-TICKETNG!</h1>
<b>	<font color="red" size="6"> <?php echo $_SESSION["admin"]; ?> </font></b><br><br><br>
</center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a  href="busselect.php">
<img src="bus1.jpg" alt="BUS" style="width:400px;height:300px;border:0" >
</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="trainselect.php">
<img src="trainn.jpg" alt="TRAIN" style="width:400px;height:300px;border:0" >
</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="airselect.php">
<img src="jet.jpg" alt="AIRLINE" style="width:400px;height:300px;border:0" >
</a>	
</body>
</html>