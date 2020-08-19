<!DOCTYPE html>
<html>
<head> 
<title>SEARCH TRAIN</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body {
  background-image: url('1.jpg');
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
  background: chocolate;
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
  border: 2px solid chocolate;
}
/* Set a style for the submit button */
.btn {
  background-color: chocolate;
  color: white;
  padding: 8px 20px;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<a href=index.php  style="color:#ffffff;">HOME</a>
<center>
<form name="RegForm" action="trainvall.php" style="max-width:500px;margin:auto" method="POST">
<center><br><br><br>
<h2><font color="#ff0066">Finding Train for your Memorable Journey</font></h></center><br>
<div class="input-container">
<i class="fa fa-subway icon"></i>  
<select name="splace" class="input-field" required >
<option value="start">Departure Place </option>
<option value="Mayiladuthurai">Mayiladuthurai </option>    
</select>
</div>
<div class="input-container">
<i class="fa fa-subway icon"></i>
<select name="dplace" class="input-field" required>
<option value="depature">Arrival Place </option>
<option value="Chennai">Chennai</option>
<option value="Banglore">Banglore </option>
<option value="Mayiladuthurai">Mayiladuthurai </option> 
</select>
</div>
<div class="input-container">
<i class="fa fa-calendar icon"></i>
<input class="input-field" type="date" placeholder="Date of journey" min="<?php  echo date('Y-m-d',strtotime($date));?>" max="<?php echo date('Y-m-d',strtotime($date.'+6 days'));?>" name="date">
<br>
</div>
<br>
<button name="btn" class="btn">Search Train</button>
</center>
</form>
</body>
</html>
