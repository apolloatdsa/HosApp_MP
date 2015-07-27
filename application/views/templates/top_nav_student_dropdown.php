<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// This is the Student dropdown menu in the top navigation bar
// it is used as an include in the administrator / manager / member / student / instructor / public nav bars
// using an include means we only need to make one change to the menus ani it will be effected across nav bars for all user levels. 


?> 
  					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>student/student_dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url();?>student/student_courses">My Courses</a></li>
                            <li><a href="<?php echo base_url();?>student/student_take_course">Take Course</a></li>
                            <li><a href="<?php echo base_url();?>student/student_course_forums">Course Forums</a></li>
                            <li><a href="<?php echo base_url();?>student/student_take_quiz">Take Quiz</a></li>
                            <li><a href="<?php echo base_url();?>student/student_messages">Messages</a></li>
                            <li><a href="<?php echo base_url();?>student/student_private_profile">Private Profile</a></li>
                            
                        </ul>
                    </li>