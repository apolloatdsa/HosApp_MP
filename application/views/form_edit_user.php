<?php 


// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// Major Project: CodeIgniter MVC framework for Folio LMS website. 
// Used in manager dashboard to edit users information 
 
					
				$attributes = array('class' => '', 'id' => '');
				echo form_open("edit_user_controller/index/", $attributes); ?>
				
				<p>
						<label for="first_name">First Name <span class="required">*</span></label>
						<?php echo form_error('first_name'); ?>
						<br /><input class="form-control"  id="first_name" type="text" name="first_name" maxlength="30" value="<?php echo set_value('first_name'); ?>"  />
				</p>
				
				<p>
						<label for="last_name">Last Name <span class="required">*</span></label>
						<?php echo form_error('last_name'); ?>
						<br /><input class="form-control" id="last_name" type="text" name="last_name" maxlength="30" value="<?php echo set_value('last_name'); ?>"  />
				</p>
				
				<p>
						<label for="company">Company <span class="required">*</span></label>
						<?php echo form_error('company'); ?>
						<br /><input class="form-control" id="company" type="text" name="company"  value="<?php echo set_value('company'); ?>"  />
				</p>
				
				<p>
						<label for="position">Position <span class="required">*</span></label>
						<?php echo form_error('position'); ?>
						
						<?php // Change the values in this array to populate your dropdown as required ?>
						<?php $options = array(
																  ''  => 'Please Select',
																  'Owner'    => 'Owner',
																  'Manager'    => 'Manager',
																  'Employee'    => 'Employee'
																
																); ?>
				
						<br /><?php echo form_dropdown('position',  $options, set_value('position'), 'class="btn dropdown-toggle form-control selectpicker btn-white"')?>
				</p>  
                
                <p>
						<label for="company">Department <span class="required">*</span></label>
						<?php echo form_error('department'); ?>
						<br /><input class="form-control" id="department" type="text" name="department"  value="<?php echo set_value('department'); ?>"  />
				</p>
                                                           
										
				<p>
						<label for="email">Email <span class="required">*</span></label>
						<?php echo form_error('email'); ?>
						<br /><input class="form-control" id="email" type="text" name="email" maxlength="30" value="<?php echo set_value('email'); ?>"  />
				</p>
				<p>
						<label for="phone_number">Phone Number <span class="required">*</span></label>
						<?php echo form_error('phone_number'); ?>
						<br /><input class="form-control" id="phone_number" type="text" name="phone_number" maxlength="30" value="<?php echo set_value('phone_number'); ?>"  />
				</p>
				
                
                
				
				<p>
						<?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
				</p>
				
				<?php echo form_close(); ?>
