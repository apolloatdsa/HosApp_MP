<?php //print_r($courses->result()); ?>

 <div class="parallax bg-white page-section">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-body">
                    <h1 class="text-display-2 margin-none">Library</h1>
                    <p class="text-light lead">Browse through courses currently available from Folio.</p>
                </div>
                <div class="media-right">
                    <div class="width-100 text-right">
                        <div class="btn-group">
                            <a class="btn btn-white" href="website-directory-grid.html"><i class="fa fa-th"></i></a>
                            <a class="btn btn-grey-900" href="website-directory-list.html"><i class="fa fa-list"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                
                <?php 
                    
					foreach($courses->result() as $row){
						
			if($row->course_name != 'Select course to add'){			
                    
              echo     ' <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-body">
                            <div class="media media-clearfix-xs">
                                <div class="media-left text-center">
                                    <div class="cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10">
                                        <span class="img icon-block height-130 bg-default"></span>
                                        <span class="overlay overlay-full padding-none icon-block bg-default">
                        <span class="v-center">
                            <i class="fa fa-eye"></i>
                        </span>
                                        </span>
                                        <a href="display_selected_course/'.$row->course_id.'" class="overlay overlay-full overlay-hover overlay-bg-white">
                                            <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-headline margin-v-5-0"><a href="'.base_url().'online_training/display_selected_course/'.$row->course_id.'">'.$row->course_name.'</a></h4>
                                    <p class="small">
                                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                    </p>
                                    <p>'.$row->course_desc.'</p>
                                    <hr class="margin-v-8" />
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <img src="'.base_url().'images/people/50/guy-9.jpg" alt="People" class="img-circle width-40" />
                                        </div>
                                        <div class="media-body">
                                            <h4><a href="">'.$row->couses_provider.'</a>
                                                <br/>
                                            </h4>
                                            Instructor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> ';
					}
					
					};
                    
                    ?>;
                    
                    
                    

                    <ul class="pagination margin-top-none">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Category</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge pull-right">120+</span>
                                    <a class="list-group-link" href="index.html">Design</a>
                                </li>
                                <li class="list-group-item active">
                                    <span class="badge pull-right">30+</span>
                                    <a class="list-group-link" href="index.html">Programming</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge pull-right">40+</span>
                                    <a class="list-group-link" href="index.html">WordPress</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge pull-right">60+</span>
                                    <a class="list-group-link" href="index.html">Workflow</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge pull-right">15+</span>
                                    <a class="list-group-link" href="index.html">HTML</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge pull-right">25+</span>
                                    <a class="list-group-link" href="index.html">CSS</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge pull-right">35+</span>
                                    <a class="list-group-link" href="index.html">iOS</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge pull-right">20+</span>
                                    <a class="list-group-link" href="index.html">Free</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="false">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Price</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group input-group margin-none">
                                <div class="row margin-none">
                                    <div class="col-xs-6 padding-none">
                                        <input class="form-control" type="text" placeholder="Min .." />
                                    </div>
                                    <div class="col-xs-6 padding-none">
                                        <input class="form-control" type="text" placeholder="Max .." />
                                    </div>
                                </div>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
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
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Corporate</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About the company</a></li>
                        <li><a href="#">Company offices</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Explore</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Courses</a></li>
                        <li><a href="">Tutors</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Become Tutor</a></li>
                        <li><a href="">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4 class="text-headline text-light">Newsletter</h4>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email here...">
                            <span class="input-group-btn">
								<button class="btn btn-grey-800" type="button">Subscribe</button>
							  </span>
                        </div>
                    </div>
                    <br/>
                    <p>
                        <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
                    </p>
                    <p class="text-subhead">
                        &copy; 2015 Learning App by mosaicpro.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>