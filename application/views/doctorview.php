<html>
     <head>
     	<body>
     		<div align="center" >
                    <h1>Patient List<h1>
     			<table border ="1" cellpadding="2px" width="600px">
     				<tr>
     					<th>Patient id</th>
     					<th>Ward NO.</th>
     					<th>Date of Admit</th>
     					<th>View</th>
     				</tr>
     				<?php  
     				foreach ($patient as $patients) {
     					$patientid=$patients['p_id'];
     					$wardno=$patients['ward_no'];
     					$dateofadmit=$patients['D_O_Admit'];

     				?>
     				<tr>
     					<td><?php echo $patientid; ?></td>
     					<td><?php echo $wardno; ?></td>
     					<td> <?php echo $dateofadmit ;?></td>

     					<td ><a title="visitPatient" href=<?php echo base_url ('index.php/doctor_module/viewpatient/'.$patientid); ?> > Visit </a> </td>
     				</tr>
     				<?php } ?>
     			</table>
     		</div>


<div align="center" >
                    <table border ="1" cellpadding="2px" width="600px">
                         <h1>Todays Appointment List</h1>
                         <tr>
                              <th>Appointment ID</th>
                              <th>Name</th>
                              <th>Sex</th>
                              <th>DOB</th>
                               <th>Diagnosis</th>
                               <th>Date Of Appointment</th>
                         </tr>
                         <?php  
                             if(is_array($appointmentInfo)){
                         foreach ($appointmentInfo as $appointment) {
                              $app_id=$appointment['app_id'];
                              $Name=$appointment['Name'];
                              $sex=$appointment['Sex'];
                              $dob=$appointment['DOB'];
                              $diagnosis=$appointment['Diagnosis'];
                              $dateofapp=$appointment['D_O_Appointment'];
                         ?>
                         <tr>
                              <td><?php echo $app_id; ?></td>
                              <td><?php echo $Name; ?></td>
                              <td> <?php echo $sex ;?></td>
                              <td> <?php echo $dob ;?></td>
                              <td> <?php echo $diagnosis ;?></td>
                              <td> <?php echo $dateofapp ;?></td>
.                             <td> <?php echo anchor('index.php/doctor_module/deleteAppointment/'.$appointment['app_id'], 'Delete','title="delete"');?> </td>
                         </tr>
                         <?php }  
                         } ?>
                    </table>
               </div>

     		<div >
     			<a title="visitProfile" href='<?php echo base_url ('index.php/doctor_module/viewprofile'); ?>'>Visit Profile</a>
     		</div>

     	</body>

     </head>
</html>