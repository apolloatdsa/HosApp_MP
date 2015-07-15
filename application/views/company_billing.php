<?php //echo  var_dump($this->session->all_userdata());?>
<?php //echo  var_dump($payment);

$student_card_number = '';
$student_ccv_number = '';
$expiry = '';
$active = '';
$payment_processed = '';
$payment_date = '';

?>


 <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="<?php echo base_url();?>images/members/<?php echo $this->session->userdata('user_id').'-'.$this->session->userdata('user_last_name');?>.JPG" alt="people" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo " " . $this->session->userdata('user_first_name'). " ". $this->session->userdata('user_last_name')." " ; ?></h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="website-student-public-profile.html">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Student</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li ><a href="<?php  echo base_url(); ?>manager_dashboard/company_profile"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                            <li class="active"><a href="<?php  echo base_url(); ?>manager_dashboard/company_billing"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                        
                        
       
                            <div id="billing" class="tab-pane active">
                            
                            <div>
                            <?php 

								foreach ($payment as $row){
									
									$student_card_number = $row->student_card_number;
									$student_ccv_number = $row->student_ccv_number;
									$month = $row->month;
									$year = $row->year;
									$expiry = $row->month. '/'. $row->year;
									$active = $row->active;
									$payment_processed = $row->payment_processed;
									$payment_date = $row->payment_date;
									}
								
								$student_card_number = $this->Student_card_update_model->mask_cc($student_card_number, $mask_char='*');
								
								
								//$this->session->set_userdata("student_card") = $student_card_numbe;
								
								
								?>
								<?php // echo $this->session->userdata("student_card_number"); ?>

                          
                           
                           
                            
                            </div>
                            
                             <!--   <form action="#" class="form-horizontal"> -->
                                
                                <?php echo form_open_multipart('student/user_billing_update', 'class="form-horizontal"' );  ?>
                                
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Name on Invoice</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input type="text" class="form-control used" id="name" value="<?php echo " " . $this->session->userdata('company') ; ?>">
                                                <label for="name">Name on Invoice</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <textarea class="form-control used" id="address"></textarea>
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="col-md-2 control-label">Country</label>
                                        <div class="col-md-6">
                                            <select id="country" data-toggle="select2" class="width-100">
                                                <option value="1" selected>Ireland</option>
                                                <option value="2">Country</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group margin-bottom-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                                <hr/>
                                <div class="media v-middle s-container">
                                    <div class="media-body">
                                        <h5 class="text-subhead">Payment details </h5>
                                    </div>
                                    
                                    
                                    <div class="media-right">
                                        <a href="#modal-update-credit-card" data-toggle="modal" class="btn btn-white paper-shadow relative" data-animated data-z="0.5" data-hover-z="1" href="">Add / Edit Credit Card</a>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="list-group margin-none">
                                    <div class="list-group-item media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block half img-circle bg-success">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-title media-heading">
                                                <a href="#modal-update-credit-card" data-toggle="modal" class="link-text-color"><?php echo	$student_card_number; ?></a>
                                            </h4>
                                            <div class="text-caption">Last updated  <span> <?php echo	$payment_date; ?> </span></div>
                                            
                                            <?php // echo var_dump($payment);  ?>
                                        </div>
                                        <div class="media-right">
                                            <a href="#modal-update-credit-card" data-toggle="modal" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item media v-middle">
                                        
                                        <div class="media-body">
                                        
                                         <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Student card details from DataBase</th>
                            <th><div class="media-left">
                                            <div class="icon-block half img-circle bg-grey-100 text-light">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                        </div></th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Credit Card Number</td>
                            <td><?php echo	$student_card_number; ?></td>
							
                            
                          </tr>
                          <tr>
                            <td>CCV</td>
                            <td>
                            <?php echo $student_ccv_number; ?></td>
							
                            
                          </tr>
                          <tr>
                            <td>Expiry date </td>
                            <td>
							<?php echo	$expiry; ?></td>
							
                            
                          </tr>
                          <tr>
                            <td>Card active </td>
                           
                            <td> <?php echo	$active; ?></td>
                            
                          </tr>
                          <tr>
                            <td>Is payment processed</td>
                            <td><?php echo	$payment_processed; ?></td>
							
                            
                          </tr>
                          <tr>
                            <td>Payment Date</td>
                            <td><?php echo	$payment_date; ?></td>
							
                            <td>
                            
                            </td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                                        
                                          
                                            
                                        </div>
                                        <div class="media-right">
                                            <a href="#modal-update-credit-card" data-toggle="modal" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                        </div>
                                        <hr>
                                        <br>
                                         
                           
                                        
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
                                                <br /><input class="form-control"  id="student_card_number" type="text" name="student_card_number" maxlength="30" value="<?php echo	$student_card_number; ?>"  />
                                            
                                                
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
                                                <br /><input class="form-control"  id="student_ccv_number" type="number" name="student_ccv_number" maxlength="3" value="<?php echo $student_ccv_number; ?>"  />
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
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="website-student-dashboard.html">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-courses.html">My Courses</a></li>
                                <li class="list-group-item active"><a class="link-text-color" href="website-student-profile.html">Profile</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-messages.html">Messages</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="login.html"><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
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