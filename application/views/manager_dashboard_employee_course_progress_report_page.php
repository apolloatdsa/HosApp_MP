 <?php 
//print_r($course_names->result());	

						
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
<script src="http://cdn.jsdelivr.net/raphael/2.1.2/raphael-min.js"></script>
<script src="http://cdn.jsdelivr.net/justgage/1.0.1/justgage.min.js"></script> 
<?php include('blue_bar_user_header.php');?>

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                 <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee Report for - <?php echo $first_name . ' ' . $last_name  ?></h4>
                                            <p class="text-subhead text-light"><?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report_completed/'.$id.'  "class="navbar-btn btn btn-success"> Show Completed </a>'   ?><spsn> </span><?php echo '<a href="' .  base_url() .'manager_dashboard/selected_employee_report/'.$id.'  "class="navbar-btn btn btn-success"> Add New </a>'   ?> </p>
                                 <hr>
                                 
            <div class="col-md-7 col-lg-7"> 
                                                                   
                                  
         
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
         
         
        <?php  
		
		$number_ofLogins = 0;
		$total_modules = 0;
		$time_on = 0;
		foreach($course_names->result() as $row){
			
			$rand_1 = (rand(1,($row->number_of_modules))-1);
			$rand_2 = $rand_1 / $row->number_of_modules * 100;
			$rand_3 = $rand_1 ;
			
			
			
		// on a live system the values would be taken from the db 
		
		echo	'<tr>
                            <td>'. $row->course_name . '</td>
                            <td>'. $row->number_of_modules . '</td>
							<td>'. $rand_1 . '</td>
                            <td>'. $row->number_of_quizs . '</td>
                            <td>'. $rand_3 . '</td>
                          </tr>
				<tr>		  
						  <td colspan="5"><div class="progress progress  margin-none">';
						  // if course is completed display green progress bar
						  if($rand_1  ==  $row->number_of_modules ||  $row->completed == 1){
							 $rand_2 =  100; // if the course is marked as completed display full width green bar
							 
                       echo   	'<div class="progress-bar progress-bar-success progress-bar-green-300" role="progressbar" aria-valuenow="'.$rand_2.'" aria-valuemin="0" aria-valuemax="100" style="width:0%;">';
							}else{
								
						echo   	'<div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="'.$rand_2.'" aria-valuemin="0" aria-valuemax="100" style="width:0%;">';	
								
								};
							
          echo       '</div>
                     </div> 
				</td>
				</tr>';
				
				$number_ofLogins = ($number_ofLogins + $rand_1);
				$total_modules = $total_modules + $row->number_of_modules;
				$time_on = $time_on + $rand_1 * 1.75;
			};   
			?>
          	<!-- spacer -->		  
		
         
        </tbody>
        </table>
         
         
          <table class="table table-striped">
                        <thead>
                          <tr >
                            <th colspan="5" >Employee metrics gauge</th>
                            
                          </tr>
            
            <tr>
         	<!-- the No# of logins / modules -->	  
		<td colspan="5"><?php  include('gauge_1.php') ?> </tr> 
          <tr>
         	<!-- spacer -->		  
		<td colspan="5">&nbsp; </tr> 
          <tr>
         	<!-- the No# of hours gauge -->		  
		<td colspan="5"><?php  include('gauge_2.php') ?> </tr> 
        
        
        
         
        </tbody>
        </table>      
            
                   
         </p>
                                         
                                         
                                         
                                         
                                         
                                         
                                                      
         
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
    