<body class="login">


 <section id="admin_page_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2 text-center">
                    <h3 class="section-heading"></h3>

 </div>
                
            </div>
           
        </div>
        
  </section>

    <section id="admin_page_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2 text-center">
                    <h3 class="section-heading"></h3>

            
                        <h1><?php echo lang('forgot_password_heading');?></h1>
                        <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
                        
                        <div id="infoMessage"><?php echo $message;?></div>
                        
                        <?php echo form_open("auth/forgot_password");?>
                        
                              <p>
                                <label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
                                <?php echo form_input($email);?>
                              </p>
                        
                              <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>
                        
                        <?php echo form_close();?>


                </div>
                
            </div>
           
        </div>
        
    </section>
    
    
    <section id="admin_page_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2 text-center">
                    <h3 class="section-heading"></h3>

 </div>
                
            </div>
           
        </div>
        
  </section>