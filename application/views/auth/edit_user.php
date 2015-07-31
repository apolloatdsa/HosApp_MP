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
                <div class="col-lg-8  "> 
                
                <div class="media s-container"> <!-- container -->
              
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                
                
                
                 <h3 class="section-heading"></h3>
                 
                 
                <h1><?php echo lang('edit_user_heading');?></h1>
            <p><?php echo lang('edit_user_subheading');?></p>
            
            <div id="infoMessage"><?php echo $message;?></div>
            
            <?php echo form_open(uri_string());?>
            
                  <p>
                        <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                        <?php echo form_input($first_name);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                        <?php echo form_input($last_name);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_company_label', 'company');?> <br />
                        <?php echo form_input($company);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                        <?php echo form_input($phone);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_password_label', 'password');?> <br />
                        <?php echo form_input($password);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                        <?php echo form_input($password_confirm);?>
                  </p>
            
                  <?php if ($this->ion_auth->is_admin()): ?>


			
           
          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              
             
              
              <div class="checkbox">
              <p>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
             </p>
               </div>
             
          <?php endforeach?>
          
              <p class="bg-info">
             
            

					  <?php endif ?>
                
                
                
                
                      <?php echo form_hidden('id', $user->id);?>
                      <?php echo form_hidden($csrf); ?>
                
                      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>
                
                <?php echo form_close();?>
                
                <p> | <?php echo anchor('auth/index', lang('back_to_index'))?> |</p> 
                
                
                

               					</div> <!-- panel body end -->
                            </div> <!-- panel body default end -->
                        </div> <!-- media body end -->
                    </div> <!-- container end -->
              
            
                </div> <!-- col-lg-8 end -->
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('includes/admin_dashboard_option_nav.php') ?> <!-- this is the right side option nav block menu -->
               
                </div>
                
                
                
                
            </div> <!-- end of row -->
           
        </div> <!-- end container -->
        
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