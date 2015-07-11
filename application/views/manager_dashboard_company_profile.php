    <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="<?php echo base_url();?>images/members/<?php echo $this->session->userdata('user_id').'-'.$this->session->userdata('user_last_name');?>.JPG" alt="member" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo " " . $this->session->userdata('user_first_name'). " ". $this->session->userdata('user_last_name')." " ; ?></h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="website-instructor-public-profile.html">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Instructor</span>
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
                            <li class="active"><a href="website-instructor-profile.html"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                            <li><a href="website-instructor-billing.html"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
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
                                                <div class="media-body">
                                                    <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                                                        <label for="exampleInputFirstName"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                                                        <label for="exampleInputLastName"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label"></label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                    <label for="inputEmail3"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label"></label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                    <input type="text" class="form-control used" id="website" placeholder="Website" value="">
                                                    <label for="website"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-md-2 control-label"></label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                <label for="inputPassword3"></label>
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
                                            <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- // END Panes -->
                    </div>
                    <!-- // END Tabbable Widget -->
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                
                 <?php  include('manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
                
                    
                </div>
            </div>
        </div>
    </div>