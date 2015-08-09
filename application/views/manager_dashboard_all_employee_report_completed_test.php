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
                                 
                                            <h4 class="text-subhead text-light"></h4>
                                         
                                 <hr>
                                 
            <div class="col-md-7 col-lg-12" id="container">
                                                                    
                                  
							<div class="col-md-12"><h4 style="color:green" ><h4></div>
                            
                            <div class="table" id="container" >
                           
                            
                            <?php echo $this->table->generate($completed_courses);  ?>
                            <?php echo $this->pagination->create_links();  ?>
                            </div>
                    
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
                
                	<?php  include('includes/manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
               
                </div>
            </div>
        </div>
    </div>
    