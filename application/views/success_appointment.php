<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "HMS" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
</head>
<body>
<h3>Appointment successful</h3> 
<p><br> <h4>Note down your appointment No.:</h4><h2><?php echo $app_id; ?></h2></p>
<p><h5>You got Appointment with doctor : </h5><h3><?php echo $doctor; ?></h3></p>
<p><h5>Appointment Day: </h5><h3><?php  echo $D_O_Appointment; ?></h3></p>
<p><h5>Appointmnet sloat:</h5><h3><?php  echo $at ?></h3></p>
<p><a href=<?php echo 'http://localhost/MHS/index.php/get_appointment'; ?>>get another appointment</a></p> 
</body>
</html>