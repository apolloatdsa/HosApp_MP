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
                <div class="col-lg-8   text-center">
                
                <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                
                
                
                 <h3 class="section-heading"></h3>
                <h1><?php echo lang('index_heading');?></h1>
                <p><?php echo lang('index_subheading');?></p>
                
                <div id="infoMessage"><?php echo $message;?></div>
                <div class="table-responsive">
                <table class="table table-striped" >
                    <tr class="info">
                        <th><?php echo lang('index_fname_th');?></th>
                        <th><?php echo lang('index_lname_th');?></th>
                        <th><?php echo lang('index_email_th');?></th>
                        <th><?php echo lang('index_groups_th');?></th>
                        <th><?php echo lang('index_status_th');?></th>
                        <th><?php echo lang('index_action_th');?></th>
                    </tr>
                    <?php foreach ($users as $user):?>
                        <tr>
                            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                            <td>
                                <?php foreach ($user->groups as $group):?>
                                    <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                                <?php endforeach?>
                            </td>
                            <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                            <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
                </div>
                <p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>

               					</div>
                            </div>
                        </div>
                    </div>
              
              
              
              
              
              
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('includes/admin_dashboard_option_nav.php') ?> <!-- this is the right side option nav block menu -->
               
                </div>
                
                
                
                
            </div> <!-- end of row -->
           
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