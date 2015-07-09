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
							
							?>
<?php 

//echo var_dump($course_names->result());

?>                            

					<div class="item col-xs-12 col-lg-9">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee Report</h4>
                                            <p class="text-subhead text-light"></p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-earnings.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body"> 
                                
                                  <div class="col-md-5">
                                            <div class="media v-middle">
                                  <div class="media-left">
                                    <div class="icon-block width-150 bg-grey-150">
                      <img src="<?php echo base_url();?>images/members/<?php echo $id.'-'.$last_name;?>.JPG" alt="member" class="img-circle width-80" />
                                      </div>
                               		<br> <label for="last_login">Last Login </label>
                                	<input class="form-control" id="last_login" type="text" name="last_login" maxlength="30"  value="<?php echo unix_to_human($last_login);   ?>" readonly="readonly" />
                                 	<br> <label for="created_on">Created on </label>
                                	 <input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo unix_to_human($created_on);   ?>" readonly="readonly" />           
                    				<br> <label for="created_on">Folio user ID </label>
                                 	<input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo $id;   ?>" readonly="readonly" />          	
                                    
                                   </div>
                        <p>
						
                        </p>          
                        <p>
						<?php 
                        
                           echo '<a href="' .  base_url() .'manager_dashboard/employee_list  "class="navbar-btn btn btn-info"> Back to list </a>';
                           
                        ?>
                        </p>                                
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
        <br /><input class="form-control" id="first_name" type="text" name="first_name" maxlength="30" placeholder = "<?php echo $first_name ?>" value="<?php echo $first_name;   ?>" readonly="readonly" />
</p>

<p>
        <label for="last_name">Last Name <span class="required">*</span></label>
        <?php echo form_error('last_name'); ?>
        <br /><input class="form-control" id="last_name" type="text" name="last_name" maxlength="30" placeholder = "<?php echo $last_name ?>"  value="<?php echo $last_name; set_value('last_name'); ?>" readonly="readonly" />
</p>

<p>
        <label for="email">Email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input class="form-control" id="email" type="text" name="email" maxlength="30" placeholder = "<?php echo $email ?>"  value="<?php echo $email; set_value('email'); ?>" readonly="readonly" />
</p>

<p>
        <label for="department">Department <span class="required">*</span></label>
        <?php echo form_error('department'); ?>
        <br /><input class="form-control" id="department" type="text" name="department" maxlength="30" placeholder = "<?php echo $department ?>"  value="<?php echo $department;  set_value('department'); ?>" readonly="readonly" />
</p>

<p>
        <label for="phone">Phone <span class="required">*</span></label>
        <?php echo form_error('phone'); ?>
        <br /><input class="form-control" id="phone" type="text" name="phone" maxlength="30" placeholder = "<?php echo $phone ?>"  value="<?php echo $phone; set_value('phone'); ?>" readonly="readonly" />
</p>


<?php echo form_close(); ?>
			<hr class="text-success">			
      <p>
         <!-- this dropdown of available courses --> 
         <label for="selected_course_ID">Assign required courses </label>
         <form  method="post" accept-charset="utf-8" action="<?php echo site_url("manager_dashboard/add_course_to_employee/$id"); ?>">
          <select class="form-control" name="selected_course_ID" onchange="this.form.submit()">
          <?php
									    
          foreach ($courses->result() as $row){
			echo '<option value="'.$row->course_id.'">'.$row->course_name.'</option>';
		};
         ?>
          </select>
          </form>
                   
         </p>
         
          <p>
         <!-- this dropdown of available courses --> 
         <label for="registered_courses">Employee is registered on -  </label><br>
         
          <?php
									    
          foreach ($course_names->result() as $row){
			echo '<a href="' .  base_url() .'manager_dashboard/remove_course/'.$row->course_id.'/'.$id.'  "class="navbar-btn btn-sm btn-warning"> Remove </a>   <br><input class="form-control"  type="text"  maxlength="30"   value="'. $row->course_name.'" readonly="readonly" /> <br> ';
			};
         ?>
          
                   
         </p>             
                        
                        </div>
                                 
                                 
                                 
                                </div>
                                <hr/>
                                <div class="panel-body">
                                <?php //echo var_dump($courses->result());  ?>
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            
                                            <h2 class=" text-danger margin-none"><?php echo  $this->session->flashdata('message');    ?></h2>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        