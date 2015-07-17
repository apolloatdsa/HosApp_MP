
<?php 

include('blue_bar_user_header.php');
$company = $this->session->userdata('company');

//print_r($employee_on_course->result());

?>
 <?php 

							
							foreach($employee_on_course->result() as $row){
								
								$first_name = $row->first_name;
								$last_name = $row->last_name;
								$email = $row->email;
								$department = $row->department;
								$last_login = $row->last_login;
								$company = $row->company;
								$phone = $row->phone;
								$department = $row->department;
								$course = $row->course_name;
								$course_desc = $row->course_desc;
								$number_of_modules = $row->course_no_modules;
								
								
								//$id = $row->id;
								}
							
								
							?>


    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 ">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                 <h4 class="text-headline margin-none"><?php echo $course;  ?> </h4>
                                 <hr>
                                 
                                            <p class="text-subhead text-light"><?php echo $course_desc;  ?></p>
                                 <hr>
                                 <h4><?php echo $this->session->userdata('company'); ?> Employees taking this course</h4>
            <div class="col-md-12 col-xs-10"> 
                                                                   
                            <div class="item col-md-10 col-xs-10 col-md-offset-1">
                           
                            
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                            
                            <?php 
							
							foreach($employee_on_course->result() as $row){
							$id = 	$row->id;
							$first_name = $row->first_name;
							$last_name = $row->last_name;
							$image = base_url().'images/members/'.$id.'-'.$last_name;
							$last_login = unix_to_human($row->last_login);
							$department = $row->department;
							$course_id = $row->course_id;
								
                            echo    '<li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="'.$image.'.JPG" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
										
                                            <p>'.$first_name.' '.$last_name.'</p>
								<a href=' .  base_url() .'manager_dashboard/course_progress/'.$id.'/'.$course_id.' class="navbar-btn btn-sm btn-warning"> <i class="fa fa-fw fa-arrow-left"> </i> view progress </a>			
										
                                            
                                        </div>
										<div class="media-right">
                                            <div class="width-120 text-right">
                                                <span class="text-caption text-light">'.$department.'</span>
                                            </div>
                                        </div>
										
                                        <div class="media-right">
                                            <div class="width-120 text-right">
                                                <span class="text-caption text-light">'.$last_login.'</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
                                
                                }
                               ?>
                               
                            </ul>
                            
                            <?php 
                                                                
                                                      echo"<a href='" .  base_url() ."manager_dashboard/manager_login_dashboard' class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-arrow-left'> </i> Return to Manger Dashboard </a>";
                                                                   
                                                                ?>
                        </div>       
										
                                                   
                                                    
         
           </div>
                                 
                                 
              <div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                  <div class="media-right"> <!-- div 9 -->
                                    <div class="icon-block width-150 bg-grey-150"> <!-- div 10 -->
                      
                                      </div> <!-- div 10 -->
                               		
                                   </div> <!-- div 9 -->
                                   <p></p>   
                                   
                                   <p>  </p>
                         
							
                        			
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
    