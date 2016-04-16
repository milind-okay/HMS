<div id ="main">
		<div id="navigation">
			<?php //$patient=//$patient is an array containing the details of patient;
						echo "<h4 >patient id </h4 >";
						echo $patient->{"p_id"};
				?>
			
		</div >
		<div id="page">
		<h1 >PATIENT DETAILS</h1 >
		<?php
			$details="";
			foreach($patient as $key=>$value)
			{
				$details.= $key."    ".$value."<br />";
				
			}
			echo $details;
				
		?>
		<h1 >PATIENT STATUS</h1 >
		<?php
		//$status=//$status is an array containing status of patient
		$details="";
			foreach($status as $key=>$value)
			{
				$details.= $key."    ".$value."<br />";
				
			}
			echo $details;
		
		?>
			<h1 >TREATS</h1 >
				<div id="anchor">
				<?php 
					//$treat=//id of doctors who has treated him
				?>
				<?php
				$output="";
				
					foreach($treat as $row){
		//$subject_count++;
		//flag contains the d_id whose detail is sought
		//$doctor_detail contains the total detail of that particular doctor
		//sending doctor  as get request*/
						$output.="<li ";
						if($flag && $row->{"d_id"} == $flag){
							$output.="class=\"selected\"";
							$output.=">";
							$output.="<a href=\"patient?doctor=";
							$output.= urlencode($row->{"d_id"});
							$output.="\">";
							foreach($doctor_detail as $key=>$value)
							{
								$output.= $key."    ".$value;
							}
							
							$output.="</a >";
							$output.="</li >";
							
							
						}
						else
						{
							$output.=">";
								$output.="<a href=\"patient?doctor=";
							$output.= urlencode($row->{"d_id"});
							$output.="\">";
							$output.= $row->{"d_id"};
							$output.="</a >";
							$output.="</li >";
						}
					}
			//	mysqli_free_result($treat);
				echo $output;
				
		
				
				?>
				</div >
				
				
				<div id="medical" >
				<h1 >MEDICAL HISTORY</h1 >
				<?php
					//$medical_history=//join medicine and medical history table to send the complete table of current patient
					$output="";
					$output.="<table border=\"1\"> ";
					$output.="<tr>";
					$output.="<th >m_id</th>";
					$output.="<th colspan=\"3\">description</th > ";
					$output.="<th>price/unit</th > ";
					$output.="<th>no of units</th > ";
					$output.="<th>total price</th > ";
					$output.="<th colspan=\"3\">department</th > ";
					$output.="</tr >";
					foreach($medical_history as $row)
					{
						$output.="<tr>";
						$output.="<td >";
						$output.=$row->{"m_id"};
						$output.="</td >";
						$output.="<td colspan=\"3\">";
						$output.=$row->{"description"};
						$output.="</td > ";
						$output.="<td >";
						$output.=$row->{"price"};
						$output.="</td > ";
						$output.="<td >";
						$output.=$row->{"units"};
						$output.="</td > ";
						$total_price=$row->{"price"} * $row->{"units"};
						$output.="<td >";
						$output.=$total_price;
						$output.="</td > ";
						$output.="<td colspan=\"3\">";
						$output.=$row->{"department"};
						$output.="</td > ";
						$output.="</tr >";
						
						
					}
					$output.="</table >";
					echo $output;
					
					
					
					
				?>
				</div >
				
				
				</div >
		
	    </div >