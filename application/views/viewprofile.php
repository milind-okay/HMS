<html>
     <head>
     	<body>
     		<div align="left" >
     			<table border ="1" cellpadding="2px" width="600px">
                         <h>Profile<h>
     				<tr>
     					<th>Patient id</th>
     					<th>Ward NO.</th>
     				</tr>
     				<?php  
     				foreach ($information as $info) {
     					$d_e_id=$info['e_id'];
                              $d_department=$info['Dept'];
     					$d_name=$info['name'];
     					$d_DOB=$info['DOB'];
                              $d_sex=$info['sex'];
                              $d_contact=$info['contact_no'];
                              $d_qualification=$info['quailfication'];
                              $d_experiance=$info['experience'];
     				?>
                         <tr>
                              <td><?php echo 'Name'; ?></td>
                              <td> <?php echo $d_name ;?></td>
                         </tr>
     				<tr>
     					<td><?php echo 'Employment Id'; ?></td>
     					<td> <?php echo $d_e_id ;?></td>
     				</tr>
                         <tr>
                              <td><?php echo 'Department'; ?></td>
                              <td> <?php echo $d_department ;?></td>
                         </tr>
                             <tr>
                              <td><?php echo 'Date of Birth'; ?></td>
                              <td> <?php echo $d_DOB ;?></td>
                         </tr>
                            <tr>
                              <td><?php echo 'Sex'; ?></td>
                              <td> <?php echo $d_sex ;?></td>
                         </tr>
                            <tr>
                              <td><?php echo 'Contact no.'; ?></td>
                              <td> <?php echo $d_contact ;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'Qualification'; ?></td>
                              <td> <?php echo $d_qualification ;?></td>
                         </tr>
                         <tr>
                              <td><?php echo 'Experiance'; ?></td>
                              <td> <?php echo $d_experiance ;?></td>
                         </tr>


     				<?php } ?>
     			</table>
     		</div>
     		<div align="right" >
     			<a title="visitProfile" href='<?php echo base_url ('index.php/doctor_module/redir_'); ?>'>Back</a>
     		</div>

     	</body>

     </head>
</html>