<?php // print_r ($course_list->result()) 


?>


<?php  $id = $this->session->userdata('user_id');  ?>
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
                    <p class="text-subhead"><a class="link-white text-underline" href="website-student-public-profile.html">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Student</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="media v-middle">
                            <div class="media-left">
                                <div class="bg-green-400 text-white">
                                    <div class="panel-body">
                                        <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                Your subscription ends on <span class="text-body-2">25 February 2016</span>
                            </div>
                            <div class="media-right media-padding">
                                <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="#">
                Upgrade
            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-toggle="isotope">
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Courses</h4>
                                    <p class="text-subhead text-light">My list of courses</p>
                                </div>
                                
                                <ul class="list-group">
                                	<?php // print_r($course_list->result());   
								
								foreach($course_list->result() as $row){
									
									echo '<li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="'.  base_url() .'course_access/select/'.$row->course_id.'/'.$row->user_id.'" class="text-subhead list-group-link">'.$row->course_name.'</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="'.(rand(10,100)).'" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>';
									
									
									}
								
								
								?>
                                </ul>
                                
                                
                                <div class="panel-footer text-right">
                                    <a href="website-student-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-body">
                                    <h4 class="text-headline margin-none">Rewards</h4>
                                    <p class="text-subhead text-light">Your latest achievements</p>
                                    <div class="icon-block half img-circle bg-purple-300">
                                        <i class="fa fa-star text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-indigo-300">
                                        <i class="fa fa-trophy text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-green-300">
                                        <i class="fa fa-mortar-board text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-orange-300">
                                        <i class="fa fa-code-fork text-white"></i>
                                    </div>
                                    <div class="icon-block half img-circle bg-red-300">
                                        <i class="fa fa-diamond text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline">Certificates
                                        <small>(4)</small>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                    <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Quizzes</h4>
                                    <p class="text-subhead text-light">Your recent performance</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-subhead margin-none">
                                                <a href="website-take-quiz.html" class="list-group-link">Title of quiz goes here?</a>
                                            </h4>
                                            <div class="caption">
                                                <span class="text-light">Course:</span>
                                                <a href="website-take-course.html">Basics of HTML</a>
                                            </div>
                                        </div>
                                        <div class="media-right text-center">
                                            <div class="text-display-1 text-green-300""><?php echo (rand(60,100)) ?>%</div>
                                            <span class="caption text-light"></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-subhead margin-none">
                                                <a href="website-take-quiz.html" class="list-group-link">Directives & Routing</a>
                                            </h4>
                                            <div class="caption">
                                                <span class="text-light">Course:</span>
                                                <a href="website-take-course.html">Angular in Steps</a>
                                            </div>
                                        </div>
                                        <div class="media-right text-center">
                                            <div class="text-display-1 text-green-300"><?php echo (rand(55,100)) ?>%</div>
                                            <span class="caption text-light"></span>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-subhead margin-none">
                                                <a href="website-take-quiz.html" class="list-group-link">Responsive & Retina</a>
                                            </h4>
                                            <div class="caption">
                                                <span class="text-light">Course:</span>
                                                <a href="website-take-course.html">Bootstrap Foundations</a>
                                            </div>
                                        </div>
                                        <div class="media-right text-center">
                                            <div class="text-display-1 text-green-300"><?php echo (rand(64,100)) ?>%</div>
                                            <span class="caption text-light"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <a href="website-student-quizzes.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> Go to Results</a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <h4 class="text-headline margin-none">Forum Activity</h4>
                            <p class="text-subhead text-light">Latest forum topics & comments</p>
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="<?php echo base_url();?>images/people/110/guy-3.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">1 hr ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="<?php echo base_url();?>images/people/110/guy-6.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">2 hrs ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="<?php echo base_url();?>images/people/110/guy-5.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">3 hr ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="<?php echo base_url();?>images/people/110/guy-4.jpg" alt="person" class="img-circle width-40" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                            <div class="text-light">
                                                Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-60 text-right">
                                                <span class="text-caption text-light">4 hr ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item active"><a class="link-text-color" href="website-student-dashboard.html">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-courses.html">My Courses</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-profile.html">Profile</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-student-messages.html">Messages</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="login.html"><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
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
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-primary"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
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
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-lightred"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                        <span class="v-center">
                            <i class="fa fa-windows"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Portable Environments with Vagrant</a></h4>
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
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-brown"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
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
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-purple"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
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
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
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
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
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
            </div>
        </div>
    </div>