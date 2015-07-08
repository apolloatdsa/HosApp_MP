

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
                            <li class="active"><a href="<?php  echo base_url(); ?>student/student_private_profile"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                            <li><a href="<?php  echo base_url(); ?>student/student_billing"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
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
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="">
                                                    	<label for="user_profile_fn">First name</label>
                                                        <input type="text" class="form-control" id="user_profile_fn" placeholder="Your first name" value="<?php echo $this->session->userdata('user_first_name'); ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                   		<label for="user_profile_ln">Last name</label>
                                                        <input type="text" class="form-control" id="user_profile_ln" placeholder="Your last name" value="<?php echo $this->session->userdata('user_last_name'); ?>">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile_email" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="input-group">
                                                    <span class=""><i class="fa fa-envelope"> </i> </span>
                                                    <input type="email" class="form-control" id="user_profile_email" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>">
                                                    <label for="user_profile_email">Email address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile_website" class="col-md-2 control-label">Website</label>
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="input-group">
                                                    <span class=""> <i class="fa fa-link"> </i> </span>
                                                    <input type="text" class="form-control used" id="user_profile_website" value="www.your_web.com">
                                                    <label for="user_profile_website">Website</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile_password" class="col-md-2 control-label">Change Password</label>
                                        <div class="col-md-6">
                                            <div class="">
                                            	<label for="user_profile_password">Password</label>
                                                <input type="password" class="form-control" id="user_profile_website" placeholder="Password">
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-6">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox3" type="checkbox" checked="">
                                                <label for="checkbox3">Subscribe to our Newsletter</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                                
                                
                                
                            </div>
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