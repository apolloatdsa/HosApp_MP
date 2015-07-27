<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// This is the Pages dropdown menu in the top navigation bar
// it is used as an include in the administrator / manager / member / student / instructor / public nav bars
// using an include means we only need to make one change to the menus ani it will be effected across nav bars for all user levels. 


?> 



 					<li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="<?php echo base_url();?>">Home page</a></li>
                            <li><a href="<?php echo base_url();?>online_training/pricing">Pricing</a></li>
                            <li><a href="<?php echo base_url();?>online_training/tutors">Tutors</a></li>
                            <li><a href="<?php echo base_url();?>online_training/forum_thread">Forum Thread</a></li>
                            <li><a href="<?php echo base_url();?>online_training/blog_post">Blog Listing</a></li>
                            <li><a href="<?php echo base_url();?>online_training/contact_us_view">Contact</a></li>
                            <li><a href="<?php echo base_url();?>map/location_map">Company offices</a></li>
                        </ul>
                    </li>