
<?php 


include('blue_bar_user_header.php');
$company = $this->session->userdata('company');
//print_r($completed_courses->result());


?>
 <?php  ?>


    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                 <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Completed Report for all employees - </h4>
                                 
                                            <h4 class="text-subhead text-light">Displaying <?php echo $number_of_results ?> results</h4>
                                         
                                 <hr>
                                 
            <div class="col-md-7 col-lg-12">                                                        
                                  
									
                                     
                                         
                                          <p>
                                         <!-- this dropdown of available courses --> 
                                         <label for="registered_courses">Employee has completed  -  </label><br>
                                         
                                          <?php
                                            // List out the courses which ajve been assigned to the employee - includes buttons to remove progress and save 						    										
                                          foreach ($completed_courses->result() as $row){
											  
                                            echo '<div class="col-md-12">
											
											<p>
											<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$row->id.'  "class="navbar-btn btn-sm btn-primary">'. $row->first_name .' '.$row->last_name.' </a>  
							<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$row->id.'  "class="navbar-btn btn-sm btn-warning"> Started  '. $row->start_date .' </a>  
                            
                                             
											
								<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$row->id.'  "class="navbar-btn btn-sm btn-success"> Completed  '. $row->end_date .' </a>  
                            <a  href="'.base_url().'manager_dashboard/manager_print_certificate/'.$row->user_id.'/'.$row->course_id.'" class="navbar-btn btn-sm btn-primary"> Print Certificate</a>  
                                             
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
                                         <div class="col-md-12"><h4 style="color:green" ><h4></div>
                                                     
         
           </div>
                                 
                                 
               <div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                  <div class="media-right"> <!-- div 9 -->
                                    <div class="icon-block width-150 bg-grey-150"> <!-- div 10 -->
                     
                                      </div> <!-- div 10 -->
                               		        	
                                    
                                   </div> <!-- div 9 -->
                                   <p></p>   
                                   
                                   <p>  <?php // include('employee_nav_buttons.php') ?> <!-- back to list Back next first last edit employee butons --> </p>
                         
							
                        			
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
    