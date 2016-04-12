<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "HMS" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
</head>
<body>
<h1>Appointment form</h1>
<?php echo validation_errors(); ?>
 <?php $this->load->helper('dob'); ?>
<?php echo form_open('get_appointment/take');
echo '<p>Name* : '.form_input('Name',set_value('Name')).'</p>';
echo '<p>Mobile No* : '.form_input('PhNo',set_value('PhNo')).'</p>';
echo '<p>Sex* : <select id="Sex" name="Sex">
                                <option value = null>select</option>
                                <option value = 0>Male</option>
                                <option value = 1>Female</option>
                                <option value = 2>praween</option>
                                </select></p>';
 echo '<p>
   <label>DOB:</label>
   <select name="month"><option value="0">Month:</option>'.generate_options(1,12,'callback_month').'</select>
   <select name="day"><option value="0">Day:</option>'.generate_options(1,31).'</select>
   <select name="year"><option value="0">Year:</option>'.generate_options(2016,1900).'</select>
  </p>';
 echo '<p>Address : '.form_input('Address',set_value('Address')).'</p>';
 echo '<p>Select Doctor* : <select id="doctor" name="d_id">
                                <option value = "null">select</option>';

                            
        foreach ($doctor_list as $key => $value) {
          echo '<option value="' . html_escape($value->d_id) . '">'.html_escape($value->name).'--- Available on :'.html_escape($value->Mon).'<br>'.$value->Tue.'<br>'.$value->Wed.'<br>'.$value->Thu.'<br>'.$value->Fri.'</option>';
        }
        
                              echo  '</select></p>';
 echo '<p>
   <label>Date of Appointment:</label>
   <select name="amonth"><option value="0">Month:</option>'.generate_options(1,12,'callback_month').'</select>
   <select name="aday"><option value="0">Day:</option>'.generate_options(1,31).'</select>
   <select name="ayear"><option value="0">Year:</option>'.generate_options(2017,2016).'</select>
  </p>';
  echo form_submit('submit','Save');
  echo form_close();

                                ?>

</body>
</html>