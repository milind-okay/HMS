<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "HMS" ?> </title>
<body>
<h1>Welcome you are logged in as Receptionist<h1>

	<div align="center" >
                    <h1>Choose the task you want to do<h1>
     			<table border ="1" cellpadding="2px" width="60px">
     				<tr>
     					<th>Update Medicine Details</th>
     					<th>Update Medical History of Patient</th>
     				</tr>
     				<tr>
					    <td><a title="medicine_details" href='<?php echo base_url ('index.php/reception_cntrl/medicine_details'); ?>'>Update the medicine Record</a></td>
     					<td><a title="medicine_history" href='<?php echo base_url ('index.php/reception_cntrl/medical_history'); ?>'>Update medical history</a></td>
     				</tr>
     			</table>
     		</div>
</body>
</html>
