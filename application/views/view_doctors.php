<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "HMS" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
</head>
<body>
<h2>Doctors Info </h2>
<table border="4" cellpadding="10">
	<tr><td>S.No.: </td><td>Doctor's Name</td><td>Dept</td><td>Qualification</td><td>Available on</td><td>Designation</td></tr>
	<?php
	foreach ($doctor_list as $key => $value) {
          echo '<tr><td>' . html_escape($key) . '</td><td>'.html_escape($value->name).'</td><td>'.html_escape($value->Dept). '</td><td>'.html_escape($value->qualification). '</td><td>'.html_escape($value->Mon).'<br>'.$value->Tue.'<br>'.$value->Wed.'<br>'.$value->Thu.'<br>'.$value->Fri. '</td><td>'.html_escape($value->Designation);
        }
        ?>
</table>

 </body>
 </html>