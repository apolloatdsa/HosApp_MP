 <!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->

<?php 

//print_r($course_names->result());

include('includes/blue_bar_user_header.php');
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
								
								include('includes/check_image.php');
							
								
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
                                            <?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$id.'  "class="navbar-btn btn btn-success"> Show Completed </a>'   ?><spsn> </span><?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report/'.$id.'  "class="navbar-btn btn btn-success"> Add New </a>'   ?></p>
                                          
                                 
                                            
                                 <hr>
                                 
            <div class="col-md-7 col-lg-7">                                                        
                                  
										<?php // Change the css classes to suit your needs    
                                        //echo $this->session->userdata('edit_id');
                                        $attributes = array('class' => '', 'id' => '');
                                        echo form_open("manager_edit_user_controller/index/$id", $attributes); ?>
                                
                               
                                <p>
                                        <label for="department">Department <span class="required">*</span></label>
                                        <?php echo form_error('department'); ?>
                                        <br /><input class="form-control" id="department" type="text" name="department" maxlength="30" placeholder = "<?php echo $department ?>"  value="<?php echo $department;  set_value('department'); ?>" readonly />
                                </p>
                                
                                
                                
                                
                                <?php echo form_close(); ?>
                                            <hr class="text-success">			
                                      <p>
                                         <!-- this dropdown of available courses --> 
                                         <label for="selected_course_ID">Assign required courses </label>
                                         <form  method="post" accept-charset="utf-8" action="<?php echo site_url("manager_dashboard/add_course_to_employee/$id"); ?>">
                                          <select class="form-control" name="selected_course_ID" onchange="this.form.submit()">
                                          <?php
                                               
										$registered = array();
										foreach ($registered_check->result() as $row){ 
										
										$course_id = $row->course_id; 
										array_push($registered, $course_id); // build array of courses which the employee is already registered for.
										} 
										
										$completed = array();
										foreach ($registered_check->result() as $row){ 
										
										$course_id = $row->course_id; 
										array_push($completed, $course_id.'-'.$row->completed); // build array of courses which the employee is already registered for.
										
										} 
											   
											                            
                                          foreach ($courses->result() as $row){ // loop through the available courses
										
											if (in_array($row->course_id, $registered)){ // is employee already on the course
											
												 if (in_array($row->course_id.'-1', $completed)){ // if on the course have they completed
												 
													echo '<option class="text-danger h4 "  value="'.$row->course_id.'"><strong>'.$row->course_name.'<strong></option>'; // red text is completed
													}else{
															echo '<option class="text-success h4 "  value="'.$row->course_id.'"><strong>'.$row->course_name.'<strong></option>'; // green for registered
														}
											
											}else{
												
												echo '<option  class=" h4 " value="'.$row->course_id.'">'.$row->course_name.'</option>'; // black text if not previously registered on the course
												}
											
                                        };
                                         ?>
                                          </select>
                                          </form>
                                                   
                                         </p>
                                          <?php 
                        
						 $message = $this->session->flashdata('message');
						
						 if (strpos($message,'ERROR') !== false ) {
						
                       echo '
                                <div class="panel panel-danger">
                                 <div class="panel-heading text-headline text-white "><span class="text-white text-display-1"> <i class=" fa fa-arrows-alt"  ></i> Error</div>
                                  <div class="panel-body"><h4>'.  $message .'</h4></div>
                                </div>
                        		';
								
						 }else{
							 
							if($message){ 
							 echo '
                                <div class="panel panel-success">
                                 <div class="panel-heading text-headline"><span class="text-white text-display-1"><i class="fa fa-check"></i> Success</span></div>
                                  <div class="panel-body"><h4>'.  $message .'</h4></div>
                                </div>
                        		';
										}
							 
							 
							 }
						
                        ?>  
                                   
                                          <p>
                                         <!-- this dropdown of available courses --> 
                                         
                                       <?php // print_r ($completed)    ?>
                                       
                                         <label for="registered_courses">Employee is registered on -  </label><br>
                                         
                                          <?php
                                            // List out the courses which ajve been assigned to the employee - includes buttons to remove progress and save
											
											 						    										
                                          foreach ($course_names->result() as $row){
											  
                                            echo '<div class="col-md-12">
											
											<p>
							<a href="#modal-remove_course" data-toggle="modal" class="navbar-btn btn-sm btn-warning paper-shadow relative" data-animated data-z="0.5" data-hover-z="1" href=""> Remove </a>				
											
							  
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
                                         
                                                     
         
           </div>
                                 
                                 
              <div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                 
                                   <p></p>   
                                   
                                   <p>  <?php  include('includes/employee_nav_buttons.php') ?> <!-- back to list Back next first last edit employee butons --> </p>
                         
							
                        			
									 <!-- the No# of hours gauge -->      
                              
                                                       
                                            </div> <!-- div 11 -->
                                        </div>   <!-- div 8 -->                            
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('includes/manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
               
                </div>
            </div>
        </div>
        
        
        
        
        
                            
                    <div class="modal grow modal-backdrop-white fade" id="modal-remove_course">
                        <div class="modal-dialog modal-sm">
                            <div class="v-cell">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Remove course</h4>
                                    </div>
                                    <div class="modal-body">
                                     
                                            <div class="text-headline">
                                          
                                            <p>
                                               Are you sure you want to remove this course. 
											</p>
                                            
                                            <p>
                                            This action can not be undone.
                                            </p>
                                            
                                            </div>
                                           
                                             <div class="form-group">
                                             
                                             <p>
                                           
                                               <button type="button" class="navbar-btn btn btn-warning" data-dismiss="modal"><span aria-hidden="true">&times; No cancel and return</span> </span><span class="sr-only"></button>
                                            </p>   
                                             <p>
                                             
                                             
                                              <?php 
                                               foreach ($course_names->result() as $row){
											  
                                            echo  ' <p><a href="' .  base_url() .'manager_dashboard/remove_course/'.$row->course_id.'/'.$row->user_id.'  "class="navbar-btn btn btn-danger">Remove  '.$row->course_name.'</a> </p>' ;
											
											
                                              }
                                              ?>
                                              </p>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                            
                                            </div>
                                            
                                            
                                         <!--   <button type="submit" class="btn btn-success paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated data-dismiss="modal">Update Credit Card</button>
                                        </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
        
        
        
        
        
        
        
        
    </div>
    