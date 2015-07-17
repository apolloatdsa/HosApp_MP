

<?php include('blue_bar_user_header.php');?>
    
    
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="<?php  echo base_url(); ?>manager_dashboard/company_profile"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                            <li><a href="<?php  echo base_url(); ?>manager_dashboard/company_billing"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                            
                            
                            <?php echo form_open_multipart('online_training/user_image_upload');  ?>
                            	
                                <div class="col-md-6  page-section">
                
                                    <table class="table ">
                                    
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th>Upload your photo </th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                            
                                              <tr>
                                                <td> Select image to upload:</td>
                                                <td><input type="file" name="userfile" class="btn btn-warning"  /></td>
                                                
                                              </tr>
                                              <tr>
                                                <td class="active"><?php  echo $error;  ?></td>
                                                <td><input type="submit" name="submit" value="Upload image" class="btn btn-success" /></td>
                                                
                                              </tr>
                                              </tbody>
                                              </form>
                                          </table>
                                          
                                        </div>	
                                
                                
                                
                                
                                
                                
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                        <div class="col-md-6">
                                            <div class="media v-middle">
                                  <div class="media-left">
                                    <div class="icon-block width-100 bg-grey-100">
                                                        <i class="fa fa-photo text-light"></i>
                                      </div>
                                                     
                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <p></p>
                                    
                                    <div class="form-group">
                                    
                                        <div class="col-md-8">
                                             <div class="row">
                                             <div class="col-md-10 ">
                                             <div>Result here <?php  echo $this->session->flashdata('company_profile_update');  ?></div>
                                             
                                                    <div class="">
                                                    
                                                    	 <?php // include('company_profile_form_view.php');  ?>
                                                      <?php // Change the css classes to suit your needs    

$attributes = array('class' => 'form-group form-inline', 'id' => 'company_profile');
echo form_open('company_profile_controller', $attributes); ?>

<p>
        <label for="company_name">Company Name <span class="required">*</span></label>
        <?php echo form_error('company_name'); ?>
        <br /><input id="company_name" type="text" class="form-control form-horizontal" name="company_name" maxlength="30" value="<?php echo set_value('company_name'); ?>"  />
</p>

<p>
        <label for="address_1">Address  <span class="required">*</span></label>
        <?php echo form_error('address_1'); ?>
        <br /><input id="address_1" type="text" class="form-control"  name="address_1" maxlength="30" value="<?php echo set_value('address_1'); ?>"  />
</p>

<p>
        <label for="address_2">Town </label>
        <?php echo form_error('address_2'); ?>
        <br /><input id="address_2" type="text" class="form-control"  name="address_2" maxlength="30" value="<?php echo set_value('address_2'); ?>"  />
</p>

<p>
        <label for="company_city">City <span class="required">*</span></label>
        <?php echo form_error('company_city'); ?>
        <br /><input id="company_city" type="text" class="form-control"  name="company_city" maxlength="30" value="<?php echo set_value('company_city'); ?>"  />
</p>

<p>
        <label for="company_country">Country <span class="required">*</span></label>
        <?php echo form_error('company_country'); ?>
        <br /><input id="company_country" type="text" class="form-control"  name="company_country" maxlength="30" value="<?php echo set_value('company_country'); ?>"  />
</p>

<p>
        <label for="company_phone">Phone No# <span class="required">*</span></label>
        <?php echo form_error('company_phone'); ?>
        <br /><input id="company_phone" type="text" class="form-control"  name="company_phone" maxlength="15" value="<?php echo set_value('company_phone'); ?>"  />
</p>

<p>
        <label for="company_email">Contact Email <span class="required">*</span></label>
        <?php echo form_error('company_email'); ?>
        <br /><input id="company_email" type="text" class="form-control"  name="company_email" maxlength="30" value="<?php echo set_value('company_email'); ?>"  />
</p>

<p>
        <label for="company_contact">Contact person <span class="required">*</span></label>
        <?php echo form_error('company_contact'); ?>
        <br /><input id="company_contact" type="text" class="form-control"  name="company_contact" maxlength="30" value="<?php echo set_value('company_contact'); ?>"  />
</p>

<p>
        <label for="company_vat">Vat No# <span class="required">*</span></label>
        <?php echo form_error('company_vat'); ?>
        <br /><input id="company_vat" type="text" class="form-control"  name="company_vat" maxlength="15" value="<?php echo set_value('company_vat'); ?>"  />
</p>

<p>
        <label for="company_reg">Co Reg No# <span class="required">*</span></label>
        <?php echo form_error('company_reg'); ?>
        <br /><input id="company_reg" type="text" class="form-control"  name="company_reg" maxlength="15" value="<?php echo set_value('company_reg'); ?>"  />
</p>

<p>
        <label for="company_position">Your roll / position <span class="required">*</span></label>
        <?php echo form_error('company_position'); ?>
        <br /><input id="company_position" type="text" class="form-control"  name="company_position" maxlength="30" value="<?php echo set_value('company_position'); ?>"  />
</p>

<p>
        <label for="company_num_emp">The number of employees <span class="required">*</span></label>
        <?php echo form_error('company_num_emp'); ?>
        <br /><input id="company_num_emp" type="text"  class="form-control" name="company_num_emp" maxlength="11" value="<?php echo set_value('company_num_emp'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
 
                                                      
                                                    </div>
                                                </div>
                                              </div>  
                                            
                                        </div>
                                        
                                    </div>
                                  
                                
                            </div> <!-- account tab pane open -->
                            
                            
                            
                            
                        </div>
                        <!-- // END Panes -->
                    </div>
                    <!-- // END Tabbable Widget -->
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
    
    
    
     <div class="modal grow modal-overlay modal-backdrop-body fade" id="student_image_upload">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
            <div class="v-cell">
                <div class="modal-content">
                    <div class="modal-body">
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>   