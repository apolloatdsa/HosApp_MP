 <?php 
                    
					foreach($courses->result() as $row){
						
						$course_id				= $row->course_id ; 
						$course_name 			= $row->course_name;
						$course_desc  			= $row->course_desc ;
						$course_no_modules  	=  $row->course_no_modules; 
						$couses_provider  		= $row->couses_provider;
						
						
						}
						
?>						
						
						


</div>
    </div>
    <div class="parallax bg-white page-section">
        <div class="parallax-layer container" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left">
                    <span class="icon-block s60 bg-lightred"><i class="fa fa-graduation-cap"></i></span>
                </div>
                <div class="media-body">
                    <h1 class="text-display-1 margin-none"><?php echo $course_name ?></h1>
                    <p class="small margin-none">
                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    </p>
                </div>
                <div class="media-right">
                
                <?php  echo'<a href="' .  base_url() .'online_training/courses_list_view" class="navbar-btn btn btn-warning"> Library</a>' ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="page-section">
                    <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RH3i7qONrT4?rel=0"></iframe>
                        </div>
                    </div>
                    <p>
                        <strong><?php echo $course_desc ?></strong></p>
                        <p> Dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                        <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                    <p>
                        <strong>Lorem ipsum</strong> dolor sit amet, consectetur tom delaney is good at this adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                        <strong>dolores enim </strong>eos hic illo inventore iure libero.
                    </p>
                    <br/>
                    <p>
                        <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                        <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                    <br/>
                    <p class="margin-none">
                        <span class="label bg-gray-dark">New</span>
                        <span class="label label-grey-200">Some information here</span>
                        <span class="label label-grey-200">More information here</span>
                    </p>
                </div>
                <div class="page-section">
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="text-headline margin-none">What you'll learn</h2>
                            <p class="text-subhead text-light">A minus obcaecati optio pariatur porro.</p>
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                                <li class="list-group-item">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-red-300 text-white img-circle">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            A minus obcaecati optio pariatur porro.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-green-300 text-white img-circle">
                                                <i class="fa fa-database"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            A minus obcaecati optio pariatur porro.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-indigo-300 text-white img-circle">
                                                <i class="fa fa-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Eaque ex exercitationem quia reprehenderit?
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-orange-300 text-white img-circle">
                                                <i class="fa fa-code-fork"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Ab distinctio nemo, provident quia quibusdam ullam.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-grey-500 text-white img-circle">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Conclusion & Notes.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="pull-right">
                                <a class="btn btn-white btn-circle paper-shadow relative" data-z="1" href="#"><i class="md md-add"></i></a>
                            </div>
                            <h2 class="text-headline margin-none">Testimonials</h2>
                            <p class="text-subhead text-light">A few words from our past students</p>
                            <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="<?php echo base_url();?>images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
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
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="<?php echo base_url();?>images/people/50/guy-7.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
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
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="<?php echo base_url();?>images/people/50/guy-3.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
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
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="<?php echo base_url();?>images/people/50/guy-6.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
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
            <div class="col-lg-3 col-md-4">
                <div class="page-section">
                    <!-- .panel -->
                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                        <div class="panel-heading">
                            <h4 class="text-headline">Course</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-caption">
                                <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                                <i class="fa fa-calendar fa-fw"></i> 21/10/14
                                <br/>
                                <i class="fa fa-user fa-fw"></i> Instructor: Adrian Demian
                                <br/>
                                <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                                <br/>
                                <i class="fa fa-check fa-fw"></i> Attending: 30
                            </p>
                        </div>
                        <hr class="margin-none" />
                        <div class="panel-body text-center">
                            <p><?php 
							
							 echo'<a href="' .  base_url() .'online_training/sign_up" class="navbar-btn btn btn-success"> Sign up to take course</a>'
							
							?>
                            </p>
                            
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                            </li>
                        </ul>
                    </div>
                    <!-- // END .panel -->
                    <!-- .panel -->
                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>images/people/110/guy-6.jpg" alt="About Adrian" width="60" class="img-circle" />
                                </div>
                                <div class="media-body">
                                    <h4 class="text-title margin-none"><a href="#">Adrian Demian</a></h4>
                                    <span class="caption text-light">Biography</span>
                                </div>
                            </div>
                            <br/>
                            <div class="expandable expandable-indicator-white expandable-trigger">
                                <div class="expandable-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aut consectetur consequatur cum cupiditate debitis doloribus, error ex explicabo harum illum minima mollitia nisi nostrum officiis omnis optio qui quisquam saepe sit sunt totam vel velit voluptatibus? Adipisci ducimus expedita id nostrum quas quia!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END .panel -->
                </div>
                <!-- // END .page-section -->
            </div>
        </div>
    </div>
    <div class="bg-white page-section">
        <div class="container">
            <h4>Featured</h4>
            
             <?php  include('includes/footer_slider.php') ?>
            

        </div>
    </div>