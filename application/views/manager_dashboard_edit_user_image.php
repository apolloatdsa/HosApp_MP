<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->


<?php include('includes/blue_bar_user_header.php');

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
						
						
								include('includes/check_image.php');
							



?>


    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" data-toggle="isotope">
                    
                        
                                 <?php  include('includes/form_student_edit.php') ?> <!-- This is the student photo edit form -->
                                 
                              
                                
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            
                                            <h2 class=" text-danger margin-none"><?php echo  $this->session->flashdata('val_error');    ?></h2>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                     <div class="col-md-3">
                   
                	</div>
                        
                  

                    </div>
                    
                </div>
                
                
                
                

            </div> <!-- end of row -->
            
            
        </div>
    </div>