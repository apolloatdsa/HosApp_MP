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
                    <span class="icon-block half bg-blue-500 text-white"><i class="fa fa-envelope"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="text-display-2 text-white margin-none">Contact us</h3>
                    <p class="text-white text-subhead">Feel free to visit or send us a message anytime.</p>
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
                    <h4 class="text-headline">Send a message</h4>
                </div>
                <div class="panel-body">
                 <h1> </h1>
                    <?php // Change the css classes to suit your needs    

							$attributes = array('class' => '', 'id' => '');
							echo form_open('contact_us_controller', $attributes); ?>
							
							<p>
									<label for="fname">First Name <span class="required">*</span></label>
									<?php echo form_error('fname'); ?>
									<br /><input class="form-control"  id="fname" type="text" name="fname" maxlength="30" value="<?php echo set_value('fname'); ?>"  />
							</p>
							
							<p>
									<label for="lname">Last Name <span class="required">*</span></label>
									<?php echo form_error('lname'); ?>
									<br /><input class="form-control"  id="lname" type="text" name="lname" maxlength="30" value="<?php echo set_value('lname'); ?>"  />
							</p>
							
							<p>
									<label for="subject">subject <span class="required">*</span></label>
									<?php echo form_error('subject'); ?>
									<br /><input class="form-control"  id="subject" type="text" name="subject" maxlength="100" value="<?php echo set_value('subject'); ?>"  />
							</p>
							
							<p>
									<label for="message">Your Message <span class="required">*</span></label>
								<?php echo form_error('message'); ?>
								<br />
														
								<?php echo form_textarea( array( 'name' => 'message', 'rows' => '8', 'cols' => '48', 'class'=> 'form-control ', 'value' => set_value('message')) )?>
							</p>
							
							<p>
									<?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'" ); ?>
							</p>
							
							<?php echo form_close(); ?>

                </div>
            </div>
            <br/>
        </div>
    </div>
    