<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>WELCOME</title>
</head>
<body >
<center><br>
<h1>WELCOME TO E-TICKETNG!</h1>
<b>	<font color="red" size="6"> <?php echo $_SESSION["uname"]; ?> </font></b>
<br><br><br>
</center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a  href="bus.php">
<img src="bus1.jpg" alt="BUS" style="width:400px;height:300px;border:0" >
</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="train.php">
<img src="trainn.jpg" alt="TRAIN" style="width:400px;height:300px;border:0" >
</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="airline.php">
<img src="jet.jpg" alt="AIRLINE" style="width:400px;height:300px;border:0" >
</a>
</body>
</html>