



 <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="<?php echo base_url();?>images/members/<?php echo $this->session->userdata('user_id').'-'.$this->session->userdata('user_last_name');?>.JPG" alt="member" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo " " . $this->session->userdata('user_first_name'). " ". $this->session->userdata('user_last_name')." " ; ?></h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="website-instructor-public-profile.html">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Manager </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" data-toggle="isotope">
                    
                        <div class="item col-xs-12 col-lg-9">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                          <div class="row ">
                                        <div class="col-md-6 text-left">
                                            
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee List</h4>
                                        </div>
                                       <div class="col-md-6 text-right ">
                                            
								<?php echo '<a href="' .  base_url() .'manager_dashboard/create_user  "class="navbar-btn btn btn-info"> Add New Employee </a>';
                                               
                                            ?>
                                        </div>
                                    </div>  
                                    
                              <p class="text-subhead text-light"></p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-earnings.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body"> 
                                    <!-- Table of employees here -->
                                    
                                   <?php //$this->contacts->index(); 
								   
									echo $this->listview->render(); // creates the table
								   
								   ?> 
                                    
                                 
                                 
                                </div>
                                <hr/>
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            
                                            <h4 class="text-display-1 text-danger margin-none"><?php echo $this->session->flashdata('message'); ?></h4>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                     <div class="col-md-3">
                   
              <?php  include('manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
                    
                    
                    <h4>Featured</h4>
                    <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
                        
                  
                        
                        <div class="item col-xs-12 col-lg-6">
                            <div class="s-container">
                                <h4 class="text-headline margin-none"></h4>
                                <p class="text-subhead text-light"></p>
                            </div>
                            <div class="panel panel-default">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    Text sub head
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none">Transactions</h4>
                                            <p class="text-subhead text-light">Latest from statement</p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-statement.html">Statement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-subhead v-middle">
                                        <tbody>
                                            <tr>
                                                <td class="width-100 text-caption">
                                                    <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                                </td>
                                                <td>Adrian Demian</td>
                                                <td class="width-80 text-center"><a href="#">#1261</a></td>
                                                <td class="width-50 text-center">&dollar;70</td>
                                            </tr>
                                            <tr>
                                                <td class="width-100 text-caption">
                                                    <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                                </td>
                                                <td>Adrian Demian</td>
                                                <td class="width-80 text-center"><a href="#">#4631</a></td>
                                                <td class="width-50 text-center">&dollar;28</td>
                                            </tr>
                                            <tr>
                                                <td class="width-100 text-caption">
                                                    <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                                </td>
                                                <td>Adrian Demian</td>
                                                <td class="width-80 text-center"><a href="#">#7396</a></td>
                                                <td class="width-50 text-center">&dollar;100</td>
                                            </tr>
                                            <tr>
                                                <td class="width-100 text-caption">
                                                    <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                                </td>
                                                <td>Adrian Demian</td>
                                                <td class="width-80 text-center"><a href="#">#14247</a></td>
                                                <td class="width-50 text-center">&dollar;88</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                
                
                
                

            </div> <!-- end of row -->
            
            
        </div>
    </div>