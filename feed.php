<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FEEDBACK</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="form.css" >
<script src="form.js"></script>
<style>
body {
  background-image: url('wel.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
body {font-family: Arial, Helvetica, sans-serif;}
.container {
  border-radius: 20px;
  background-color: #f2f2f2;
  padding: 20px;
   width: 900px;
  height: 500px;  
}
}
</style>
</head>
<body ><center><font color="ff0000">
<h1>FEEDBACK FORM</h1></center></font><br>
<div class="container">
<div class="imagebg"></div>
<div class="row " style="margin-top: 20px" >
<div class="col-md-6 col-md-offset-3 form-container">                  
<form role="form" method="post" id="reused_form" action="thanks.php">
<div class="row">
<div class="col-sm-12 form-group">
<label>Please Rate Your Overall Experience</label>
<p>
<label class="radio-inline">
<input type="radio" name="experience" id="radio_experience" value="bad" >
Bad 
</label>
<label class="radio-inline">
<input type="radio" name="experience" id="radio_experience" value="average" >
Average 
</label>
<label class="radio-inline">
<input type="radio" name="experience" id="radio_experience" value="good" >
Good 
</label>
</p>
</div>
</div>
<div class="row">
<div class="col-sm-12 form-group">
<label for="comments"> Comments:</label>
<textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
</div>
</div>
<div class="row">
<div class="col-sm-6 form-group">
<label for="name"> Your Name:</label>
<input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="col-sm-6 form-group">
<label for="email"> Email:</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
</div>
<div class="row">
<div class="col-sm-12 form-group">
<button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
</div>
</form>                    
</div>
</div>
</div>
</body>
</html>