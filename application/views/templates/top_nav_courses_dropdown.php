<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// This is the Courses dropdown menu in the top navigation bar
// it is used as an include in the administrator / manager / member / student / instructor / public nav bars
// using an include means we only need to make one change to the menus ani it will be effected across nav bars for all user levels. 


?> 


					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>online_training/courses_list_view">Grid Directory</a></li>
                            <li><a href="<?php echo base_url();?>online_training/courses_list_view">List Directory</a></li>
                            <li><a href="<?php echo base_url();?>online_training/courses_list_view">Single Course</a></li>
                        </ul>
                    </li>