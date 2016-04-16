<div id ="main">
		<div id="navigation">
			<?php //$patient=//$patient is an array containing the details of patient;
						echo "<h4 >admin id </h4 >";
						echo $admin;
				?>
		</div >
		<div id="page">
		<h4 >change password</h4 >
		<form  action="admin" method="POST" >
			current password: <input type="password" name="current_password" value="" />
			new password : <input type="password" name="new_password" value="" />
			confirm new password: <input type="password" name="new_password2" value="" />
			<input type="submit" name="submit" value="submit" >
			
		</form >
		<?php
		//flag is returned from controller if password is successfullchanged
			if(isset($flag) && $flag== TRUE){
			echo "password successfully changed <br />";
			}
			elseif(isset($flag) && $flag== FALSE){
			echo "try again <br />";
			}
			
		?>
				<div id="employees" >
				<h1 >EMPLOYEES</h1 >
				<?php
					//$employee=table containing name and employee id
					$output="";
					$output.="<table border=\"1\"> ";
					$output.="<tr>";
					$output.="<th colspan=\"3\" >e_id</th>";
					$output.="<th colspan=\"3\">name</th > ";
					$output.="<th colspan=\"3\">fire</th > ";
					$output.="<th colspan=\"3\">make admin</th > ";
					
					$output.="</tr >";
					foreach($employee as $row)
					{
						$output.="<tr>";
						$output.="<td  colspan=\"3\">";
						$output.=$row->{"e_id"};
						$output.="</td >";
						$output.="<td colspan=\"3\">";
						$output.=$row->{"name"};
						$output.="</td >";
						$output.="<td colspan=\"3\">";
						$output.="<form action=\"admin?e_id={$row->{"e_id"}}\" method=\"POST\" >";//what_to_do will go to controller and by $_GET["e_id"]
						$output.="<input type=\"submit\" name=\"what_to_do\" value=\"fire\" />";
						$output.="</form >";
						$output.="</td >";
						$output.="<td colspan=\"3\">";
						$output.="<form action=\"admin?e_id={$row->{"e_id"}}\" method=\"POST\" >";//what_to_do will go to controller and by $_GET["e_id"]
						$output.="<input type=\"submit\" name=\"what_to_do\" value=\"make admin\" />";// form for making some employee admin
						$output.="</form >";
						$output.="</td >";

						$output.="</tr >";
						
						
					}
					$output.="</table >";
					echo $output;
					
					
					
					
				?>
				</div >
				<div id="insert" >
					<?php
					
					if(isset($_POST["position"]) && isset($_POST["new_employee"]))//this will get after form validation in controller and to fill the doctor or receptionist form,soif form validation fails, unset $_POST["new_employee"]
					{
					echo validation_errors();
						$output="";//before this sterp is repeated make sure to save all values in controller
						$output.="<form action=\"admin/new_employee_details\" method=\"POST\" >";
						if($_POST["position"]=="doctor")
						{
							
							$output.="department: <input type=\"text\" name=\"department\" value=\"\" id=\"department\" />";
							$output.="designation: <input type=\"textarea\" name=\"designation\" value=\"\" id=\"designation\" />";
							$output.="password: <input type=\"password\" name=\"password\" value=\"\"  id=\"password\" />";
						
							
						
						}
						elseif($_POST["position"]=="nurse")
						{
							$output.="ward no : <input type=\"number\" name=\"ward_no\" value=\"\" id=\"ward_no\" />";
							
						}
						else
						{
						$output.="password: <input type=\"password\" name=\"password\" value=\"\" id=\"password\" />";
							
						}
						$output.="submit <input type=\"submit\" name=\"new_employee_details\" value=\"submit\" />";
						$output.="</form >";
						echo output;
					}
					
					elseif(isset($_GET["add_new_employee"]))
					{
					echo validation_errors();
					
					$output="";
					$output.="<form action =\"admin/set_employee\" method=\"POST\"  >";
						$output.="Name: <input type=\"text\" name=\"name\" value=\"\" id=\"name\" />";
						$output.="Date Of Birth:<input type=\"date\" name=\"DOB\" min=\"1900-01-01\" id=\"DOB\" />";
						$output.=" sex:";
						$output.="<input type=\"radio\" name=\"sex\" value=\"M\" checked  id=\"sex\"/> Male <br />";
						$output.="<input type=\"radio\" name=\"sex\" value=\"F\"  id=\"sex\"/> Female <br />";
						$output.="<input type=\"radio\" name=\"sex\" value=\"O\" id=\"sex\" /> other <br />";
						$output.="contact no :<input type=\"number\" name=\"contact_no\" id= \"contact_no\" />";
						$output.="qualification :<input type=\"textarea\" name=\"qualification\"  id=\"qualification\" />";
						$output.="experience :<input type=\"number\" name=\"experience\" id= \"experience\" />";
					
					
					//sending position as profession sought to controller
					
					$output.="Position sought: <select >";
											$output.="<option name=\"position\" value=\"doctor\" id= \"position\" > doctor </option >";
											$output.="<option name=\"position\" value=\"nurse\" id= \"position\" > doctor </option >";
											$output.="<option name=\"position\" value=\"receptionist\" id= \"position\" > doctor </option >";
									$output.="</select >";
									
							$output.="submit <input type=\"submit\" name=\"new_employee\" value=\"submit\"  />";
									
						
					 $output.="</form >";
					 echo $output;
					 }
					else
					{
					$output="";
					$output.="<a href=\"admin?add_new_employee=1\" >+add employee </a >";
					echo $output;
					}
					?>
					
					<div id="new_admin">
					<?php
					if(isset($_GET["add_admin"]) && $_GET["add_admin"]==1)
					{?>
					<form action="admin" method="POST">
					admin id:<input type="number" name="admin_id" value="" />
					password:<input type="password" name="admin_password" />
					</form >
					<?php } 
					 else {?>
					<a href="admin?add_admin=1" > + add admin </a >
					<?php } ?>
					</div >
				</div >
				
		
		</div >
</div >