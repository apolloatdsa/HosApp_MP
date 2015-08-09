<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->
<?php 

include('includes/blue_bar_user_header.php');
$company = $this->session->userdata('company');


?>

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <div class="col-md-6 text-left">
                                            
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee Report</h4>
                                        </div>
                                       <div class="col-md-6 text-right ">
                                     
								<?php echo '<a href="' .  base_url() .'manager_dashboard/create_user  "class="navbar-btn btn btn-info"> Add New Employee </a>';
                                               
                                            ?>
                                        </div>
                                 <hr>
                                 
            <div class="col-md-7 col-lg-7"> 
                                                                   
                                  
                                     
                                   <h4>Select <?php echo  $this->session->userdata('company') ; ?> employee from dropdown </h4>
                                   
                                   <!-- this dropdown will call the selected employee report method and send the ID in the POST --> 
                                 
                                  <form method="post" accept-charset="utf-8" action="<?php echo site_url("manager_dashboard/selected_employee_report"); ?>">
                                        <select class="form-control" name="selected_employee_ID" onchange="this.form.submit()">
                                       <?php
									    
                                        foreach ($employee_list->result() as $row){
											echo '<option value="'.$row->id.'">'.$row->first_name.' '.$row->last_name.'</option>';
											};
                                        
                                        ?>
                                       
                                        </select>
                                    </form>      
                                         
                                    
         
           </div>
                                 
                                 
              <div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                  <div class="media-right"> <!-- div 9 -->
                                    <div class="icon-block width-150 bg-grey-150"> <!-- div 10 -->
                     
                                      </div> <!-- div 10 -->
                               		
                                    
                                   </div> <!-- div 9 -->
                                   
                                                       
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
    