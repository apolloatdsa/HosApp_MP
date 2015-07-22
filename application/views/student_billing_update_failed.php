<?php include('blue_bar_user_header.php');?>
    
    <!-- Top blue bar with user image name and type -->
    
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li><a href="<?php  echo base_url(); ?>student/student_private_profile"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                            <li><a href="<?php  echo base_url(); ?>student/student_billing"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
                           <li class="active"><a href="<?php  echo base_url(); ?>student/student_card_upsate_failed"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details Update Failed</span></a></li>  
                        
                        </ul>
                        <!-- // END Tabs -->
                        
                        
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="billing" class="tab-pane active">
                            
                             <!--   <form action="#" class="form-horizontal"> -->
                                
                                <hr/>
                               
                                <div class="media v-middle s-container success">
                                    <div class="media-body ">
                                        <h3 class="">Your account failed to updated</h3>
                                    </div>
                                    <div class="media-right">
                                        <a href="#modal-update-credit-card" data-toggle="modal" class="btn btn-white paper-shadow relative" data-animated data-z="0.5" data-hover-z="1" href="">Add Credit Card</a>
                                    </div>
                                </div>
                                <div class="list-group margin-none">
                                    <div class="list-group-item media v-middle"> 
                                    
                                    <div class="media-left">
                                            <div class="icon-block half img-circle bg-danger">
                                                <i class="fa fa-thumbs-o-down"></i>
                                            </div>
                                        </div>
                                    
                                        <div class="media-left">
                                            <div class="icon-block half img-circle bg-primary">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-title media-heading">
                                                <a href="#modal-update-credit-card" data-toggle="modal" class="link-text-color">**** **** **** 2422</a>
                                            </h4>
                                            <div class="text-caption">updated 1 month ago</div>
                                        </div>
                                        <div class="media-right">
                                            <a href="#modal-update-credit-card" data-toggle="modal" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block half img-circle bg-grey-100 text-light">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-title media-heading">
                                                <a href="#modal-update-credit-card" data-toggle="modal" class="link-text-color">**** **** **** 3365</a>
                                            </h4>
                                            <div class="text-caption">updated 1 year ago</div>
                                        </div>
                                        <div class="media-right">
                                            <a href="#modal-update-credit-card" data-toggle="modal" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Panes -->
                        
                        
                    </div>
                    <!-- // END Tabbable Widget -->
                    
                    
                    
                    
                    <div class="modal grow modal-backdrop-white fade" id="modal-update-credit-card">
                        <div class="modal-dialog modal-sm">
                            <div class="v-cell">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Update Credit Card</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open_multipart('student_card_update_controller/index');  ?>
                                        
                                            <div class="form-group">
                                            
                                            	<label for="student_card_number">Card Number <span class="required">*</span></label>
												<?php echo form_error('student_card_number'); ?>
                                                <br /><input class="form-control"  id="student_card_number" type="number" name="student_card_number" maxlength="30" value="<?php echo set_value('student_card_number'); ?>"  />
                                            
                                                
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                               <label for="month">Year <span class="required">*</span></label>
						<?php echo form_error('month'); ?>
						
						<?php // Change the values in this array to populate your dropdown as required ?>
						<?php $options = array(
																  ''  => 'Please Select',
																  '01'    => 'January',
																  '02'    => 'February',
																  '03'    => 'March',
																  '04'    => 'April',
																  '05'    => 'May',
																  '06'    => 'June',
																  '07'    => 'July',
																  '08'    => 'August',
																  '09'    => 'September',
																  '10'    => 'October',
																  '11'    => 'November',
																  '12'    => 'December'
																  
																); ?>
				
						<br /><?php echo form_dropdown('month',  $options, set_value('month'), 'class="btn dropdown-toggle form-control selectpicker btn-white"')?>
                                            </div>
                                            
                                            
                                             <div class="form-group">
                                               <label for="year">Year <span class="required">*</span></label>
						<?php echo form_error('year'); ?>
						
						<?php // Change the values in this array to populate your dropdown as required ?>
						<?php $options = array(
																  ''  => 'Please Select',
																  '2015'    => '2015',
																  '2016'    => '2016',
																  '2017'    => '2017',
																  '2018'    => '2018',
																  '2019'    => '2019',
																  '2020'   	=> '2020',
																  '2021'    => '2021'
																  
																); ?>
				
						<br /><?php echo form_dropdown('year',  $options, set_value('year'), 'class="btn dropdown-toggle form-control selectpicker btn-white"')?>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                               <label for="student_ccv_number">CCV <span class="required">*</span></label>
												<?php echo form_error('student_ccv_number'); ?>
                                                <br /><input class="form-control"  id="student_ccv_number" type="text" name="student_ccv_number" maxlength="3" value="<?php echo set_value('student_ccv_nunber'); ?>"  />
                                            </div>
                                            <?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
                                        
                                <?php echo form_close(); ?>
                                            
                                            
                                         <!--   <button type="submit" class="btn btn-success paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated data-dismiss="modal">Update Credit Card</button>
                                        </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                
                
                    <?php include('student_nav_bar_options.php')?>
                    
                    
                    <h4>Featured</h4>
                    <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-primary"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-lightred"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                        <span class="v-center">
                            <i class="fa fa-windows"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Portable Environments with Vagrant</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-brown"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-purple"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>