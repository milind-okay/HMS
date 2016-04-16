<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "HMS" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
</head>
<body>
<h1>User Login</h1>
<?php echo validation_errors(); 
  $this->load->helper('dob'); 
 echo $message.'<br>';
  echo form_open('login/attempt');
echo '<p>login as:* : <select id="type" name="type">
                                <option value = null>select</option>
                                <option value = 1>Doctor</option>
                                <option value = 2>patient</option>
                                <option value = 3>Admin</option>
                                <option value = 4>Receptionist</option>
                                </select></p>';
echo '<p>UserID* : '.form_input('ID',set_value('ID')).'</p>';
echo '<p>Password* : '.form_input('password',set_value('password','Password')).'</p>';

 
  
  echo form_submit('submit','Login');
  echo form_close();

                                ?>

</body>
</html>