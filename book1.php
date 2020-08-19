<!DOCTYPE html>
<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BOOKING YOUR TICKET</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body {
  background-image: url('back.jpg');
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

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.icon {
  padding: 10px;
  background: forestgreen;
  color: white;
  min-width: 50px;
  text-align: center;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid forestgreen ;
}
/* Set a style for the submit button */
.btn {
  background-color: forestgreen;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body> 
<center>
<form name="RegForm" action="#" style="max-width:500px;margin:auto" onsubmit="return REGISTERATION()" method="post">
<center><br>
<b><h1><font color="#ff0066">BOOKING YOUR TICKETS</font></h1></b><br>
<div class="input-container">
<i class="fa fa-user icon"></i>
<input class="input-field" type="text" placeholder="Number of Passangers" name="user" required>
</div>
<div class="input-container">
<i class="fa fa-mobile icon" style='font-size:25px'></i>
<select name="splace" class="input-field" required >
<option value="start">Select Your Card </option>
<option value="Mayiladuthurai">Debit Card </option>
<option value="Chennai">Credit Card </option>     
</select>
</div>
<div class="input-container">
<i class="fa fa-mobile icon" style='font-size:25px'></i>
<input class="input-field" type="text" placeholder="Card Number" name="confpsw" required>
</div>
<div class="input-container">
<i class="fa fa-key icon" style='font-size:25px'></i>
<input class="input-field" type="password" placeholder="CVV" name="age" required>
</div>
<div class="input-container">
<i class="fa fa-calendar icon"></i>
<input class="input-field" type="text" placeholder="Expairy Month " name="email" required>
</div>
<div class="input-container">
<i class="fa fa-calendar icon"></i>
<input class="input-field" type="text" placeholder="Expairy  Year" name="email" required>
</div>
<br> 
<button type="submit" class="btn">Pay Here</button>
</form>
</center>
<center><br>
<b><h2><font color="#ff0066"> YOUR BOOKING AIRLINE DETAILS</font></h2></b>
<table style="width:90%">
  <tr>
    <th>AIRLINE ID</th>
    <th>AIRLINE TYPE</th>
    <th>DEPARTING PLACE</th> 
    <th>ARRIVAL PLACE</th>
    <th>DEPARTING TIME</th>
    <th>ARRIVAL TIME</th>
    <th>MAXIMUM SEATS</th>
    <th>AVAILABLE SEATS</th>
    <th>TOTAL FARE</th>
    <th>VIEW TICKET</th>    
  </tr>
<?php
include "main.php";
$ID=$_REQUEST['AIRLINEID'];
$namesql = "SELECT * FROM airline WHERE AIRLINEID='".$ID."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
?>
<tr>
 <td><?php echo $row["AIRLINEID"];?></td>
 <td><?php echo $row["AIRLINETYPE"];?></td>
 <td><?php echo $row["STARTPLACE"];?></td>
 <td><?php  echo $row["ENDPLACE"];?></td>
 <td><?php echo $row["STARTTIME"];?></td>
 <td><?php echo $row["ENDTIME"];?></td>
 <td><?php echo $row["MAXSEATS"];?></td>
 <td><?php echo $row["AVAILSEATS"];?></td>
 <td><?php echo $row["FARE"]; ?></td>
 <td><a href="view1.php?AIRLINEID=<?php echo $row["AIRLINEID"];?>"> View Ticket</a></td>
</tr>
</table>
<?php 
}
}
?></center>
</body>
</html>