<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->
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
                                         <label for="registered_courses"><?php echo $first_name ?> has completed the following -  </label><br>
                                         
                                          <?php
                                            // List out the courses which ajve been assigned to the employee - includes buttons to remove progress and save 						    										
											
										if ($completed_courses->num_rows() > 0) {	
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
												};
												
											echo 	'</p>
											  
											 <br> </div>';
                                            };
											
										}else{
											
											echo ' <h4> The employee has not completed any courses </h4>
												<h4> To demonstrate a completed course </h4>
												
												<p>
												<ul class="h4">
												<li>Go to the course progress page by clicking the add new button above. Then assign a course. </li>
												<li>To mark a course as completed click on the Add / Remove check on the course in the list.</li>
												</ul>
												</p>
												<p>
												<img src="'.base_url().'images/set_complete.jpg" alt="member" class="img-circle width-300" />
												
												
												
												</p>
												
												';
											
											};
										
										
										
										 // end if
                                         ?>
                                          
                                                   
                                         </p> 
                                         <div class="col-md-12"><h4 style="color:green" ><?php echo $this->session->flashdata('message');   ?><h4></div>
                                                     
         
           </div>
                                 
                                 
              							<div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                 
                                               <p></p>   
                                               
                                               <p>  <?php  include('includes/employee_nav_buttons.php') ?> <!-- back to list Back next first last edit employee butons --> </p>
                                                   
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
    