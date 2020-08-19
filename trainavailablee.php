<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TRAIN AVAILABILITY</title>
<style>
body {
  background-image: url('welco.jpg');
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
  text-align: center;
}
th {
  text-align: left;
}
</style>
</head>
<body>
<center><br>
<h1><font color="yellow">AVAILABLE TRAIN DETAILS</font></h1><br>
<table style="width:100%">
	<tr>
    <th><font color="red">TRAIN NO</font></th>
    <th><font color="red">TRAINNAME</font></th>
    <th><font color="red">DEPARTING PLACE</font></th> 
    <th><font color="red">ARRIVAL PLACE</font></th>
    <th><font color="red">DEPARTING TIME</font></th>
    <th><font color="red">ARRIVAL TIME</font></th>
    <th><font color="red">MAXIMUM SEATS</font></th>
    <th><font color="red">AVAILABLE SEATS</font></th>
    <th><font color="red">TOTAL FARE</font></th>
    <th><font color="red">BOOKING TRAIN</font></th> 
  </tr>
<?php
include "main.php";
$namesql = "SELECT * FROM train WHERE STARTPLACE = '".$_SESSION['startplace']."' and ENDPLACE = '".$_SESSION['endplace']."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
?>
<tr>
 <td><?php echo $row["TRAINNO"];?></td>
 <td><?php echo $row["TRAINNAME"];?></td>
 <td><?php echo $row["STARTPLACE"];?></td>
 <td><?php  echo $row["ENDPLACE"];?></td>
 <td><?php echo $row["STARTTIME"];?></td>
 <td><?php echo $row["ENDTIME"];?></td>
 <td><?php echo $row["MAXSEATS"];?></td>
 <td><?php echo $row["AVAILSEATS"];?></td>
 <td><?php echo $row["FARE"]; ?></td>
 <td><a href="book2.php?TRAINNO=<?php echo $row["TRAINNO"];?>">Book Now!</a></td>
</tr>
<?php 
}
}
?>
</center>
</form>
</body>
</html>