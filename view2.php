<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>VIEW TICKET</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style >
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-yahoo {
  background: #430297;
  color: white;
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
<body>
<?php
include "main.php";
$ID=$_REQUEST['TRAINNO'];
$namesql = "SELECT * FROM train WHERE TRAINNO='".$ID."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
?>
<center><br>
<h2><font color="#ff0000">YOUR TICKET WAS SUCCESSFULLY GENERATED!</h2></font>
<div class="container">          
<table class="table table-striped" style="width:80%">
<thead class="table table-bordered " >
<tr>
<th> <h3><font color="green">ONLINE TRAIN TICKET</font> </h3></th>
</tr>
</thead>
<tbody height="350" class="table table-bordered">
      <tr>
      <h4><td><b>  Passanger Name&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;<?php echo $_SESSION["uname"] ;?></td></h4>
      </tr>
      <tr>
      <h4>  <td><b>TRAIN NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp; <?php echo $row["TRAINNO"] ;?></td></h4>
      <tr>
      <h4>  <td><b>TRAIN NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp; <?php echo $row["TRAINNAME"] ;?></td></h4>
      </tr>
      </tr>
      <tr>
      <h4> <td><b>Starting Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;<?php echo $row["STARTPLACE"] ;?></td></h4>
      </tr>
      <tr>
      <h4> <td><b>Departure Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</b><?php echo $row["ENDPLACE"] ;?></td></h4>
      </tr>
      <tr>
      <h4> <td><b>Starting Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</b><?php echo $row["STARTTIME"] ;?></td></h4>
      </tr>
      <tr>
      <h4><td><b>Departure Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</b><?php echo $row["ENDTIME"] ;?></td></h4>
      </tr>  
      <tr>
      <h4> <td><b>Total Fare&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;RS.&nbsp;<?php echo $row["FARE"]  ;?></td>
      </tr>
</tbody>
</table>
</div>
<?php 
}
}
?>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-yahoo"></a>
<center>
<br> <button onClick="myFunction()" class="btn">
<div align="center">Print Your TRAIN Ticket</div>
</button></center>
<script>
function myFunction() {
window.print();
}
</script>
</body>
</html>
