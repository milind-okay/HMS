<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "reception" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
</head>
<body>
<h1>User Add patient</h1>
<?php echo validation_errors(); 
 
 echo $display.'<br>';
  echo form_open('receptionist/add_patient');
echo '<p>Patient Appointment ID:* :'.form_input('app_id'); 
  
  echo form_submit('submit','submit');
  echo form_close();

                                ?>

</body>
</html>