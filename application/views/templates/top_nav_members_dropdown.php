<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// This is the Members dropdown menu in the top navigation bar
// it is used as an include in the administrator / manager / member / student / instructor / public nav bars
// using an include means we only need to make one change to the menus ani it will be effected across nav bars for all user levels. 


?> 
 					
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member options <span class="caret"></span></a>
                        <ul class="dropdown-menu active ">
                            <li><a href="<?php echo base_url();?>member/member_dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url();?>member/member_profile">My Profile</a></li>
                            <li><a href="<?php echo base_url();?>member/member_forum">Members Forum</a></li>
                        </ul>
                    </li>