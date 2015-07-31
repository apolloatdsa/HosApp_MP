
<?php 


include('includes/blue_bar_user_header.php');
$company = $this->session->userdata('company');
//print_r($completed_courses->result());

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
                                 <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Completed Report for - <?php echo $first_name . ' ' . $last_name  ?></h4>
                                            <p class="text-subhead text-light"><?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$id.'  "class="navbar-btn btn btn-success"> Show Completed </a>'   ?><spsn> </span><?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report/'.$id.'  "class="navbar-btn btn btn-success"> Add New </a>'   ?> </p>
                                 <hr>
                                 
            <div class="col-md-7 col-lg-7">                                                        
                                  
                                          <p>
                                         <!-- this dropdown of available courses --> 
                                         <label for="registered_courses"><?php echo $first_name ?> has completed  -  </label><br>
                                         
                                          <?php
                                            // List out the courses which ajve been assigned to the employee - includes buttons to remove progress and save 						    										
                                          foreach ($completed_courses->result() as $row){
											  
                                            echo '<div class="col-md-12">
											
											<p>
						 <a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$id.'  "class="navbar-btn btn-sm btn-warning"> Started  '. $row->start_date .' </a>  
                        			
						   <a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$id.'  "class="navbar-btn btn-sm btn-success"> Completed  '. $row->end_date .' </a>  
                            
                                       
											<br>			
												<input type="text" class="form-control input-lg" id="inputSuccess_'.$row->course_id.'" value="'. $row->course_name.'" readonly="readonly" >';
											// if the course is completed add the check mark set in the employee_to_course table
											// when saved set the employee_results completed to 1
											if($row->completed == 1){
												
											echo	'<h1 style="color:green"  class="glyphicon glyphicon-ok form-control-feedback"></h1> 
											<br> 
											<a  href="'.base_url().'manager_dashboard/manager_print_certificate/'.$row->user_id.'/'.$row->course_id.'" class="navbar-btn btn-sm btn-primary"> Print Certificate</a>
											';
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
                      <img src="<?php echo $image ;?>" alt="member" class="img-circle width-80" />
                                      </div> <!-- div 10 -->
                               		<br> <label for="last_login">Last Login </label>
                                	<input class="form-control" id="last_login" type="text" name="last_login" maxlength="30"  value="<?php echo unix_to_human($last_login);   ?>" readonly />
                                 	<br> <label for="created_on">Created on </label>
                                	 <input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo unix_to_human($created_on);   ?>" readonly />           
                    				<br> <label for="created_on">Folio user ID </label>
                                 	<input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo $id;   ?>" readonly />          	
                                    
                                   </div> <!-- div 9 -->
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
    </div>
    