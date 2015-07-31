<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// This is the Student dropdown menu in the top navigation bar
// it is used as an include in the administrator / manager / student / instructor nav bars
// using an include means we only need to make one change to the menus ani it will be effected across nav bars for all user levels. 


?> 


<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>student/student_dashboard">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>student/student_courses">My Courses</a></li>
                                
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>student/student_course_forums">Course Forums</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>student/student_take_quiz">Take Quiz</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>student/student_messages">Messages</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>student/student_private_profile">Private Profile</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>auth/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>