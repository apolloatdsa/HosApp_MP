<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->
        </div>
    </div>
    <div class="parallax page-section bg-blue-300">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media media-grid v-middle">
                <div class="media-left">
                    <span class="icon-block half bg-blue-500 text-white"><i class="fa fa-sign-in"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="text-display-2 text-white margin-none">Sign Up</h3>
                    <p class="text-white text-subhead">Expert staff training and compliance accreditation.</p>
                </div>
            </div>
        </div>
    </div>
   
    <div class="page-section parallax relative overflow-hidden">
      <h1>&nbsp; </h1>
        <img class="parallax-layer absolute top left" data-translate-when="inViewport" src="<?php echo base_url(); ?>images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg" alt="parallax image" />
        <div class="container">
            <div class="panel margin-none panel-default paper-shadow max-width-400 h-center" data-z="0.5">
                <div class="panel-heading">
                    <h4 class="text-headline">Sign Up</h4>
                </div>
                <div class="panel-body">
                 <h1> </h1>
                 
                 
                   <?php // Change the css classes to suit your needs    
					
				$attributes = array('class' => '', 'id' => '');
				echo form_open('sign_up_controller', $attributes); ?>
				
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


                </div>
            </div>
            <br/>
        </div>
    </div>
    