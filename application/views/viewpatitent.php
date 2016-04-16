<html>
     <head>
     	<body>
     		<div align="left" >
     			<table border ="1" cellpadding="2px" width="600px">
                         <h>Profile<h>
     				<?php  
     				foreach ($information as $info) {
     					$p_p_id=$info['p_id'];
                              $p_name=$info['Name'];
     					$p_sex=$info['Sex'];
     					$p_DOB=$info['DOB'];
                              $p_age=$info['Age'];
                              $p_Address=$info['Address'];
                              $p_phone=$info['PhNo'];
                              $p_dateofadmit=$info['D_O_Admit'];
                              $p_wardno=$info['ward_no'];
                              $p_diagnosis=$info['Diagnosis'];
                              $p_dept=$info['Dept'];
                              $p_description=$info['description'];
     				?>
                         <tr>
                              <td><?php echo 'Patient ID'; ?></td>
                              <td> <?php echo $p_p_id ;?></td>
                         </tr>
     				<tr>
     					<td><?php echo 'Name'; ?></td>
     					<td> <?php echo $p_name ;?></td>
     				</tr>
                         <tr>
                              <td><?php echo 'Sex'; ?></td>
                              <td> <?php echo $p_sex ;?></td>
                         </tr>
                             <tr>
                              <td><?php echo 'Date of Birth'; ?></td>
                              <td> <?php echo $p_DOB ;?></td>
                         </tr>
                            <tr>
                              <td><?php echo 'Age'; ?></td>
                              <td> <?php echo $p_age ;?></td>
                         </tr>
                            <tr>
                              <td><?php echo 'Address'; ?></td>
                              <td> <?php echo $p_Address ;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'Phone'; ?></td>
                              <td> <?php echo $p_phone ;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'Ward No.'; ?></td>
                              <td> <?php echo $p_wardno ;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'Diagnosis'; ?></td>
                              <td> <?php echo  $p_diagnosis;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'Department'; ?></td>
                              <td> <?php echo $p_dept ;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'description'; ?></td>
                              <td> <?php echo  $p_description ;?></td>
                         </tr>

     				<?php } ?>
     			</table>
     		</div>
     		<div align="left" >
     			<a title="visitProfile" href='<?php echo base_url ('index.php/doctor_module/redir_'); ?>'>Back</a>
     		</div>

     	</body>

     </head>
</html>