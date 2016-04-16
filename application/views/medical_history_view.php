<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "HMS" ?> </title>
<body>
<h1>Updating Medical History<h1>
<div id="container">
<?php echo validation_errors();
echo form_open('index.php/reception_cntrl/attempt1'); 
 echo form_label('Patient Id:'); 
 echo form_input(array('id'=>'p_id','name'=>'p_id')); 
 echo form_label('Department:');
 echo form_input(array('id'=>'Dept','name'=>'Dept')); 
 echo form_label('Medicine Id:');
 echo form_input(array('id'=>'m_id','name'=>'m_id')); 
 echo form_submit(array('id'=>'submit','value'=>'submit')); 
 echo form_close(); ?>
</div>

</body>
</html>
