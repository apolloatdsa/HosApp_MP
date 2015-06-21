
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    
                    
                   <!-- <img src="images/people/110/guy-5.jpg" class="img-circle width-80"> -->
                    <div class="panel-body">
                    
                       <h1><?php echo lang('login_heading');?></h1>
                            <p><?php echo lang('login_subheading');?></p>
                            
                            <div id="infoMessage"><?php echo $message;?></div>
                            
                            <?php echo form_open("auth/login");?>
                            
                              <p>
                                <?php echo lang('login_identity_label', 'identity');?><br>
                                <?php echo form_input($identity, 'class="form-control"' );?>
                              </p>
                            
                              <p>
                                <?php echo lang('login_password_label', 'password');?><br>
                                <?php echo form_input($password, 'class="form-control"');?>
                              </p>
                            
                              <p>
                                <?php echo lang('login_remember_label', 'remember');?>
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"', 'class="checkbox checkbox-success"');?>
                              </p>
                            
                              <p><?php echo form_submit('submit', lang('login_submit_btn'), "class='btn btn-primary'" );?></p>
                            
                            <?php echo form_close();?>
                            

						<h4><a href="auth/forgot_password"><?php echo lang('login_forgot_password');?></a></h4>
                        </div>
                        
                   <!-- <a href="../website-student-dashboard.html" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></a> -->
                        
                       <h4> <a href="<?php echo base_url(); ?>online_training/sign_up" class="link-text-color">Create account</a> </h4>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>