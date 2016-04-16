<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "reception" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
</head>
<body>
<h1>Patient Details</h1>
<?php echo validation_errors(); 

  echo form_open('receptionist/patient_details/1');
echo '<p>Patient ID:* :'.form_input('p_id',set_value('p_id',$p_id)).'</p>'; 
  echo '<p>Name:* :'.form_input('Name',set_value('Name',$Name)).'</p>';
  echo '<p>DOB:* :'.form_input('DOB',set_value('DOB',$DOB)).'</p>';
  echo '<p>Sex:* :'.form_input('Sex',set_value('Sex',$Sex)).'</p>';
  echo '<p>Address :'.form_input('Address',set_value('Address',$Address)).'</p>';
  echo '<p>Contact No.* :'.form_input('PhNo',set_value('PhNo',$PhNo)).'</p>';
  echo '<p>Password* :'.form_input('password',set_value('password',$password)).'</p>';
  echo '<p>Doctor ID:* :'.form_input('d_id',set_value('d_id',$d_id)).'</p>';
  echo form_submit('submit','submit');
  echo form_close();

                                ?>

</body>
</html>