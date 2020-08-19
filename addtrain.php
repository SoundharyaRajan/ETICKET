<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADD TRAIN</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body {
  background-image: url('log.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
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
<form name="RegForm" action="" style="max-width:500px;margin:auto" method="post">
<input type="hidden" name="new" value="1"/>
<center><br>
<b><h1><font color="#ff0066">ADD TRAIN DETAILS</font></h1></b>
<div class="input-container">
<i class="fa fa-user icon"></i>
<input class="input-field" type="text" placeholder="Train ID" name="tno" required>
</div>
<div class="input-container">
<i class="fa fa-user icon"></i>
<input class="input-field" type="text" placeholder="Train Name" name="tname" required>
</div>
<div class="input-container">
<i class="fa fa-search icon" ></i>
<input class="input-field" type="text" placeholder="Starting Place" name="splace" required>
</div>
<div class="input-container">
<i class="fa fa-search icon" ></i>
<input class="input-field" type="text" placeholder="Arrival Place" name="aplace" required>
</div>
<div class="input-container">
<i class="fa fa-calendar icon"></i>
<input class="input-field" type="text" placeholder="Starting Time" name="stime" required>
</div>
<div class="input-container">
<i class="fa fa-calendar icon" ></i>
<input class="input-field" type="text" placeholder="Arrival Time" name="atime" required>
</div>
<div class="input-container">
<i class="fa fa-user icon" ></i>
<input class="input-field" type="text" placeholder="Maximum Seats" name="mseats" required>
</div>
<div class="input-container">
<i class="fa fa-user icon" ></i>
<input class="input-field" type="text" placeholder="Available Seats" name="aseats" required>
</div>
<div class="input-container">
<i class="fa fa-mobile icon" ></i>
<input class="input-field" type="text" placeholder="Total Fare" name="fare" required>
</div>
<br>
<button type="submit" class="btn">Submit</button>
</form>
</center>
<?php
require('main.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){   
    $tno =$_REQUEST['tno'];
    $tname =$_REQUEST['tname'];
    $splace = $_REQUEST['splace'];
    $aplace = $_REQUEST['aplace'];
    $stime = $_REQUEST['stime'];
    $atime = $_REQUEST['atime'];
    $mseats = $_REQUEST['mseats'];
    $aseats = $_REQUEST['aseats'];
    $fare = $_REQUEST['fare'];
    $ins_query="insert into train
    (`TRAINNO`,`TRAINNAME`,`STARTPLACE`,`ENDPLACE`,`STARTTIME`,`ENDTIME`,`MAXSEATS`,`AVAILSEATS`,`FARE`) values
    ('$tno','$tname','$splace','$aplace','$stime','$atime','$mseats','$aseats','$fare')";
if(mysqli_query($con,$ins_query))
{
?>  
<script language="javascript">
alert("NEW TRAIN ADDED SUCCESFULLY"); 
window.location.href="traindetail.php"
</script>
<?php
} 
else{
?>
<script language="javascript">
alert("FAILED TO INSERT");
window.location.href="addtrain.php"
</script>
<?php   
}
}
?>
</body>
</html>
