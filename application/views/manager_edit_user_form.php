 <?php 
 
// print_r($user_group->result());	

							foreach($user_group->result() as $row){
								
								$group = $row->name;
								
								}

						
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
								
								include('check_image.php');
							?>

					<div class="item col-xs-12 col-lg-12">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Edit - <?php echo $first_name .' '. $last_name   ?></h4>
                                            <p class="text-subhead text-light"></p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-earnings.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body"> 
                                
                                  <div class="col-md-10">
                                            <div class="media v-middle">
                                  <div class="media-left">
                                    <div class="icon-block width-150 bg-grey-150">
                      <img src="<?php echo $image ;?>" alt="member" class="img-circle width-80" />
                                      </div>
                                    <h4>Last login    <?php echo unix_to_human($last_login)     ?>  </h4>            
                    				<h4>Created on    <?php echo  unix_to_human($created_on)   ?>  </h4>
                                                </div>
                                      <p>
						<?php 
                        
                         echo '<a href="' .  base_url() .'manager_dashboard/edit_employee_image  "class="navbar-btn btn btn-success"> Edit employee photo </a>';
                           
                        ?>
                        </p>          
                        <p>
						<?php 
                        
                         echo '<a href="' .  base_url() .'manager_dashboard/employee_list  "class="navbar-btn btn btn-info"> Back to list </a>';
                           
                        ?>
                        </p>
                          <p>
						<?php 
                        
                         echo "<a href='" .  base_url() ."manager_dashboard/selected_employee_report/$id  'class='navbar-btn btn btn-info'> Report page </a>";
                           
                        ?>
                        <?php 
                                                                
                        echo "<a href='" .  base_url() ."manager_dashboard/manager_login_dashboard' class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-arrow-left'> </i> Return to Dashboard </a>";
                                                                   
                         ?>
                        
                        
                        </p>  
                        
                        
                        <?php 
                        
						 $message = $this->session->flashdata('val_error');
						
						 if (strpos($message,'error') !== false) {
						
                       echo '
                                <div class="panel panel-danger">
                                 <div class="panel-heading text-headline text-white "><span class="text-white text-display-1"> <i class=" fa fa-arrows-alt"  ></i> Error</span></div>
                                  <div class="panel-body"><h4>'.  $message .'</h4></div>
                                </div>
                        		';
								
						 }else{
							 
							if($message){ 
							 echo '
                                <div class="panel panel-success">
                                 <div class="panel-heading text-headline"><span class="text-white text-display-1"> <i class="fa fa-check"></i> Success</span></div>
                                  <div class="panel-body"><h4>'.  $message .'</h4></div>
                                </div>
                        		';
										}
							 
							 
							 }
						
                        ?>
                           
                        
                        
                        
                                                        
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    <!-- Table of employees here -->
                                  <div class="col-md-7">  

<?php // Change the css classes to suit your needs    
//echo $this->session->userdata('edit_id');
$attributes = array('class' => '', 'id' => '');
echo form_open("manager_edit_user_controller/index/$id", $attributes); ?>

<p>
        <label for="first_name">First Name <span class="required">*</span></label>
        <?php echo form_error('first_name'); ?>
        <br /><input class="form-control" id="first_name" type="text" name="first_name" maxlength="30" placeholder = "<?php echo $first_name ?>" value="<?php echo $first_name;  set_value('first_name'); ?>"  />
</p>

<p>
        <label for="last_name">Last Name <span class="required">*</span></label>
        <?php echo form_error('last_name'); ?>
        <br /><input class="form-control" id="last_name" type="text" name="last_name" maxlength="30" placeholder = "<?php echo $last_name ?>"  value="<?php echo $last_name; set_value('last_name'); ?>"  />
</p>

<p>
        <label for="email">Email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input class="form-control" id="email" type="text" name="email" maxlength="30" placeholder = "<?php echo $email ?>"  value="<?php echo $email; set_value('email'); ?>"  />
</p>

<p>
        <label for="department">Department <span class="required">*</span></label>
        <?php echo form_error('department'); ?>
        <br /><input class="form-control" id="department" type="text" name="department" maxlength="30" placeholder = "<?php echo $department ?>"  value="<?php echo $department;  set_value('department'); ?>"  />
</p>

<p>
        <label for="phone">Phone <span class="required">*</span></label>
        <?php echo form_error('phone'); ?>
        <br /><input class="form-control" id="phone" type="text" name="phone" maxlength="30" placeholder = "<?php echo $phone ?>"  value="<?php echo $phone; set_value('phone'); ?>"  />
</p>

<p>
        <?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
</p>

<?php echo form_close(); ?>

						
                                    <p>
                    <label for="group">The user type is  </label>
                    
                    <br /><input class="form-control" id="user_group" type="text" name="group" maxlength="30" placeholder = "<?php echo $group ?>"  value="<?php echo $group ?> " readonly />
            </p>
                        
                        
                       
						
                       <p>
                                         <!-- this dropdown of available courses --> 
                                         <label for="selected_group" class="text-danger">Change user type </label>
                                         <form  method="post" accept-charset="utf-8" action="<?php echo site_url("manager_edit_user_controller/set_group/$id"); ?>">
                                          <select class="form-control  " name="selected_group" onchange="this.form.submit()">
                                          <?php
                                          
											    echo '<option  class=" h4 " value="'.$group.'">'.$group.'</option>';
												                        
                                          foreach ($groups->result() as $row){ // loop through the available courses
										
											if ($row->name != 'admin'){
												
												echo '<option  class=" h4 " value="'.$row->id.'">'.$row->name.'</option>'; 
											}
											
                                        };
                                         ?>
                                          </select>
                                          </form>
                                                   
                                         </p>


                        
                        
                        </div>
                                 
                                 
                                 
                                </div>
                                <hr/>
                               
                            </div>
                        </div>
                        