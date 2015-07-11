 <?php 
							
							foreach($employee as $row){
								
								$first_name = $row->first_name;
								$last_name = $row->last_name;
								$email = $row->email;
								$username = $row->username;
								$last_login = $row->last_login;
								$company = $row->company;
								$phone = $row->phone;
								$department = $row->department;
								$active = $row->active;
								$created_on = $row->created_on;
								$id = $row->id;
								}
								
							$edit_employee = array(
							   'edit_id'  => $id
						   );
			
								$this->session->set_userdata($edit_employee);
							
							?>
<?php 

//echo var_dump($course_names->result());

?>                            

					<div class="item col-xs-12 col-lg-9">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee Report</h4>
                                            <p class="text-subhead text-light"></p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-earnings.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body"> 
                                
                                  <div class="col-md-5">
                                            <div class="media v-middle">
                                  <div class="media-left">
                                    <div class="icon-block width-150 bg-grey-150">
                      <img src="<?php echo base_url();?>images/members/<?php echo $id.'-'.$last_name;?>.JPG" alt="member" class="img-circle width-80" />
                                      </div>
                               		<br> <label for="last_login">Last Login </label>
                                	<input class="form-control" id="last_login" type="text" name="last_login" maxlength="30"  value="<?php echo unix_to_human($last_login);   ?>" readonly />
                                 	<br> <label for="created_on">Created on </label>
                                	 <input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo unix_to_human($created_on);   ?>" readonly />           
                    				<br> <label for="created_on">Folio user ID </label>
                                 	<input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo $id;   ?>" readonly />          	
                                    
                                   </div>
                                   
                                   
                                   
                                   
                                   
                        <p>
						
                        </p>          
                        <p>
						<?php 
                        
                           echo '<a href="' .  base_url() .'manager_dashboard/employee_list  "class="navbar-btn btn btn-info"> Back to list </a>';
                           
                        ?>
                        </p> 
                        <p>
                        <span>
                        <?php 
                        
              echo "<a href='" .  base_url() ."manager_dashboard/selected_previous_employee/$id/$company 'class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-arrow-left'> </i> Back </a>";
                           
                        ?>
                        </span>
                        <span>  </span>
                        
                        <span>
						<?php 
                        
                echo "<a href='" .  base_url() ."manager_dashboard/selected_next_employee/$id/$company 'class='navbar-btn btn btn-success'> Next <i class='fa fa-fw fa-arrow-right'> </i></a>";
                           
                        ?>
                        </span>
                        
                        </p>  
                         <p>
                <?php 
                        
                           echo "<a href='" .  base_url() ."manager_dashboard/edit/$id  'class='navbar-btn btn btn-info'> Edit employee </a>";
                           
                        ?>
						
                        </p>     
                        
                              
                                                       
                                            </div>
                                        </div>
                                    <!-- Table of employees here -->
                                  <div class="col-md-7">  

         
          <p>
         <!-- this dropdown of available courses --> 
         <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Course Name</th>
                            <th>Number of Modules</th>
                           <th>Completed Modules</th>
                            <th>Number of quizs</th>
                            <th>Completed quizs</th>
                          </tr>
                        </thead>
                        <tbody>
         
         
        <?php  foreach($course_results->result() as $row){
			
			$rand_1 = (rand(1,$row->number_of_modules));
			$rand_2 = $rand_1 / $row->number_of_modules * 100;
			$rand_3 = $rand_1 - 1;
		echo	'<tr>
                            <td>'. $row->course_name . '</td>
                            <td>'. $row->number_of_modules . '</td>
							<td>'. $rand_1 . '</td>
                            <td>'. $row->number_of_quizs . '</td>
                            <td>'. $rand_3 . '</td>
                          </tr>
				<tr>		  
						  <td colspan="5"><div class="progress progress  margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="'.$rand_2.'" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                                </div>
                                            </div> </td>
				
				</tr>';
				
			};   
			?>
            
        </tbody>
        </table>     
            
            
                   
         </p>             
                        
                        </div>
                                 
                                 
                                 
                                </div>
                                <hr/>
                                <div class="panel-body">
                                <?php //echo var_dump($courses->result());  ?>
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            
                                            <h2 class=" text-danger margin-none"><?php echo  $this->session->flashdata('message');    ?></h2>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        