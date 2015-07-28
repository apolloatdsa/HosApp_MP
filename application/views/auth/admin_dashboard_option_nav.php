<?php 

// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// Major Project: CodeIgniter MVC framework for Folio LMS website. 
// Used in the manager dashboard as the right side menu / nav block

$id = $this->session->userdata('user_id');
$sort_by = 'course_name';
$sort_order = 'asc';


?>
 <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Actions</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                            	<li class="list-group-item"><a class="link-text-color"  href="<?php echo base_url();?>auth/index">List User</a></li>
                                
                            	<li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>auth/change_password">Change Password</a></li>
                                <li class="list-group-item"><a class="link-text-color"  href="<?php echo base_url();?>auth/create_user">Create user</a></li>
                                <li class="list-group-item"><a class="link-text-color"  href="<?php echo base_url();?>auth/create_group">Create Group</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>auth/edit_group/<?php echo $id ?>">Edit Group</a></li>
                                
                                <li class="list-group-item"><a class="link-text-color"  href="<?php echo base_url();?>manager_dashboard/manager_login_dashboard">Manager Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color"  href="<?php echo base_url();?>student/student_dashboard">Student Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color"  href="<?php echo base_url();?>cdn/cdn_dashboard">CDN Dashboard</a></li>
                               
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a  class="link-text-color" href="<?php echo base_url();?>auth/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                              
                            </ul>
                        </div>
                    </div>