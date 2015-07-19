
<?php 


include('blue_bar_user_header.php');
$company = $this->session->userdata('company');


?>
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


    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                 <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee Report for - <?php echo $first_name . ' ' . $last_name  ?></h4>
                                            <p class="text-subhead text-light">
                                            <?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$id.'  "class="navbar-btn btn btn-success"> Show completed courses </a>'   ?></p>
                                            
                                 <hr>
                                 
            <div class="col-md-7 col-lg-7">                                                        
                                  
										<?php // Change the css classes to suit your needs    
                                        //echo $this->session->userdata('edit_id');
                                        $attributes = array('class' => '', 'id' => '');
                                        echo form_open("manager_edit_user_controller/index/$id", $attributes); ?>
                                
                                <p>
                                        <label for="first_name">First Name <span class="required">*</span></label>
                                        <?php echo form_error('first_name'); ?>
                                        <br /><input class="form-control" id="first_name" type="text" name="first_name" maxlength="30" placeholder = "<?php echo $first_name ?>" value="<?php echo $first_name;   ?>" readonly />
                                </p>
                                
                                <p>
                                        <label for="last_name">Last Name <span class="required">*</span></label>
                                        <?php echo form_error('last_name'); ?>
                                        <br /><input class="form-control" id="last_name" type="text" name="last_name" maxlength="30" placeholder = "<?php echo $last_name ?>"  value="<?php echo $last_name; set_value('last_name'); ?>" readonly />
                                </p>
                                
                                <p>
                                        <label for="email">Email <span class="required">*</span></label>
                                        <?php echo form_error('email'); ?>
                                        <br /><input class="form-control" id="email" type="text" name="email" maxlength="30" placeholder = "<?php echo $email ?>"  value="<?php echo $email; set_value('email'); ?>" readonly />
                                </p>
                                
                                <p>
                                        <label for="department">Department <span class="required">*</span></label>
                                        <?php echo form_error('department'); ?>
                                        <br /><input class="form-control" id="department" type="text" name="department" maxlength="30" placeholder = "<?php echo $department ?>"  value="<?php echo $department;  set_value('department'); ?>" readonly />
                                </p>
                                
                                <p>
                                        <label for="phone">Phone <span class="required">*</span></label>
                                        <?php echo form_error('phone'); ?>
                                        <br /><input class="form-control" id="phone" type="text" name="phone" maxlength="30" placeholder = "<?php echo $phone ?>"  value="<?php echo $phone; set_value('phone'); ?>" readonly />
                                </p>
                                
                                
                                <?php echo form_close(); ?>
                                            <hr class="text-success">			
                                      <p>
                                         <!-- this dropdown of available courses --> 
                                         <label for="selected_course_ID">Assign required courses </label>
                                         <form  method="post" accept-charset="utf-8" action="<?php echo site_url("manager_dashboard/add_course_to_employee/$id"); ?>">
                                          <select class="form-control" name="selected_course_ID" onchange="this.form.submit()">
                                          <?php
                                                                        
                                          foreach ($courses->result() as $row){
                                            echo '<option style=" background-color:#0FFFF0;" value="'.$row->course_id.'">'.$row->course_name.'</option>';
                                        };
                                         ?>
                                          </select>
                                          </form>
                                                   
                                         </p>
                                         
                                          <p>
                                         <!-- this dropdown of available courses --> 
                                         <label for="registered_courses">Employee is registered on -  </label><br>
                                         
                                          <?php
                                            // List out the courses which ajve been assigned to the employee - includes buttons to remove progress and save 						    										
                                          foreach ($course_names->result() as $row){
											  
                                            echo '<div class="col-md-12">
											
											<p>
							<a href="' .  base_url() .'manager_dashboard/remove_course/'.$row->course_id.'/'.$id.'  "class="navbar-btn btn-sm btn-warning"> Remove </a>  
                             <a href="' .  base_url() .'manager_dashboard/course_progress/'.$id. '/'.$row->course_id.'  "class="navbar-btn btn-sm btn-info"> View Progress </a>
							 <a href="' .  base_url() .'manager_dashboard/mark_as_completed/'.$id. '/'.$row->course_id.'  "class="navbar-btn btn-sm btn-danger"> Add / Remove check </a>
                             <a href="' .  base_url() .'manager_dashboard/save_completed/'.$id. '/'.$row->course_id.'  "class="navbar-btn btn-sm btn-success"> Archive completed </a>
                                             
											<br>
												<input type="text" class="form-control input-lg" id="inputSuccess_'.$row->course_id.'" value="'. $row->course_name.'" readonly="readonly" >';
											// if the course is completed add the check mark set in the employee_to_course table
											// when saved set the employee_results completed to 1
											if($row->completed == 1){
												
											echo	'<h1 style="color:green"  class="glyphicon glyphicon-ok form-control-feedback"></h1>';
												}
												
											echo 	'</p>
											  
											 <br> </div>';
                                            };
                                         ?>
                                          
                                                   
                                         </p> 
                                         <div class="col-md-12"><h4 style="color:green" ><?php echo $this->session->flashdata('message');   ?><h4></div>
                                                     
         
           </div>
                                 
                                 
              <div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                  <div class="media-right"> <!-- div 9 -->
                                    <div class="icon-block width-150 bg-grey-150"> <!-- div 10 -->
                      <img src="<?php echo base_url();?>images/members/<?php echo $id.'-'.$last_name;?>.JPG" alt="member" class="img-circle width-80" />
                                      </div> <!-- div 10 -->
                               		<br> <label for="last_login">Last Login </label>
                                	<input class="form-control" id="last_login" type="text" name="last_login" maxlength="30"  value="<?php echo unix_to_human($last_login);   ?>" readonly />
                                 	<br> <label for="created_on">Created on </label>
                                	 <input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo unix_to_human($created_on);   ?>" readonly />           
                    				<br> <label for="created_on">Folio user ID </label>
                                 	<input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo $id;   ?>" readonly />          	
                                    
                                   </div> <!-- div 9 -->
                                   <p></p>   
                                   
                                   <p>  <?php  include('employee_nav_buttons.php') ?> <!-- back to list Back next first last edit employee butons --> </p>
                         
							
                        			
									 <!-- the No# of hours gauge -->      
                              
                                                       
                                            </div> <!-- div 11 -->
                                        </div>   <!-- div 8 -->                            
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
               
                </div>
            </div>
        </div>
    </div>
    