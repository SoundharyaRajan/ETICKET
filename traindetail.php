<!DOCTYPE html>
<html>
<head>
<title>TRAIN DETAILS</title>
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
<h1><font color="yellow">TRAIN DETAILS</font></h1></center>
<?php
include "main.php";
$namesql = "SELECT * FROM train ";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
?>
<table style="width:100%">
	<tr>
    <th><font color="red">TRAIN ID</font></th>
    <th><font color="red">TRAIN NAME</font></th>
    <th><font color="red">DEPARTING PLACE</font></th> 
    <th><font color="red">ARRIVAL PLACE</font></th>
    <th><font color="red">DEPARTING TIME</font></th>
    <th><font color="red">ARRIVAL TIME</font></th>
    <th><font color="red">MAXIMUM SEATS</font></th>
    <th><font color="red">AVAILABLE SEATS</font></th>
    <th><font color="red">TOTAL FARE</font></th>
    <th><font color="red">DELETE BUS</font></th>
  </tr>
<?php
while($row = mysqli_fetch_assoc($result)) 
{
                        $tno = $row['TRAINNO'];
                        $tname=$row['TRAINNAME'];
                        $startplace = $row['STARTPLACE'];
                        $endplace = $row['ENDPLACE'];
                        $stime = $row['STARTTIME'];
                        $dtime = $row['ENDTIME'];
                        $maxseats = $row['MAXSEATS'];
                        $availseats = $row['AVAILSEATS'];
                         $fare = $row['FARE']; 
?>
<tr>
    <td ><?php echo $tno; ?> </td>
    <td ><?php echo $tname; ?> </td>
    <td><?php echo $startplace; ?></td>
    <td><?php echo $endplace;?></td>
    <td><?php echo $stime;?></td>
    <td><?php echo $dtime;?></td>
    <td><?php echo $maxseats;?></td>
    <td><?php echo $availseats;?></td>
    <td><?php echo $fare;?></td>
    <td><a href="del2.php?TRAINNO=<?php echo $row["TRAINNO"]; ?>">Delete</a></td>
  </tr>
<?php
}
}
?>
</table>
<form action="addtrain.php"><center><br>
<button class="btn">Add Train</button>
</center></form>
</body>
</html>