<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->


<?php 
		foreach($selected_course->result() as $row){
			
			$course_id				= $row->course_id ; 
			$course_no_modules 		= $row->course_no_modules;
			//$row->current_module 	=  $current_module;
			$number_of_quizs 		= $row->number_of_quizs;
			//$row->current_quiz 	= $current_quiz; 
			
			$course_name 			= $row->course_name ; 
			$course_desc  			= $row->course_desc ;
			$course_no_modules  	=  $row->course_no_modules; 
			$couses_provider  		= $row->couses_provider;
			
			}

			//print_r ($selected_course->result());

?>


  <div class="parallax bg-white page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle media-overflow-visible">
                <div class="media-left">
                    <span class="icon-block s30 bg-lightred"><i class="fa fa-github"></i></span>
                </div>
                <div class="media-body">
                    <div class="text-headline"><?php echo $course_name  ?></div>
                </div>
                <div class="media-right">
                    <div class="dropdown">
                        <a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#">Course <span class="caret"></span></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="">Something</a></li>
                            <li><a href="">Something else</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                	
                    
                             <!--   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RH3i7qONrT4?rel=0" frameborder="0" allowfullscreen></iframe> -->
                            
                                          <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RH3i7qONrT4?rel=0"></iframe>
                        </div>

                
                    <div class="page-section padding-top-none">
                        <div class="media media-grid v-middle">
                        
                 
                            <div class="media-left">
                                <span class="icon-block half bg-blue-300 text-white">1</span>
                            </div>
                            <div class="media-body">
                            
                                <h1 class="text-display-1 margin-none"><?php echo $course_name  ?></h1>
                            </div>
                        </div>
                        <br/>
                        <p class="text-body-2">Video and content here will be streamed from a Content Distribution Network .</p>
                        <p class="text-body-2"><?php echo $course_desc  ?></p>
                    </div>
                    <h5 class="text-subhead-2 text-light">Curriculum</h5>
                    <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
                        <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-headline"><?php echo $course_name  ?> Module 1</h4>
                                    
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                </div>
                            </div>
                            <span class="collapse-status collapse-open">Open</span>
                            <span class="collapse-status collapse-close">Close</span>
                        </div>
                        <div class="list-group collapse in" id="curriculum-1">
                            <div class="list-group-item media active" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-green-300"></i> Module 1 information
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media " data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">2.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-300"></i> Module 1 more information
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">25:01 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">3.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 1 more information
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">12:10 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">4.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 1 more information
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">1:25 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">5.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 1 more information
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">22:30 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-quiz.html">
                                <div class="media-left">
                                    <div class="text-crt">6.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">10:00 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                        <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-2">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block half img-circle bg-orange-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-headline"><?php echo $course_name  ?> Module 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                </div>
                            </div>
                            <span class="collapse-status collapse-open">Open</span>
                            <span class="collapse-status collapse-close">Close</span>
                        </div>
                        <div class="list-group collapse" id="curriculum-2">
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">2.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">25:01 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">3.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">12:10 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">4.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">1:25 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">5.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">22:30 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-quiz.html">
                                <div class="media-left">
                                    <div class="text-crt">6.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">10:00 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                        <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-3">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-block half img-circle bg-green-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-headline"><?php echo $course_name  ?> Module 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                </div>
                            </div>
                            <span class="collapse-status collapse-open">Open</span>
                            <span class="collapse-status collapse-close">Close</span>
                        </div>
                        <div class="list-group collapse" id="curriculum-3">
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">1.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">2:03 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">2.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">25:01 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">3.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">12:10 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">4.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">1:25 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-course.html">
                                <div class="media-left">
                                    <div class="text-crt">5.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Module 2 more information here
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">22:30 min</div>
                                </div>
                            </div>
                            <div class="list-group-item media" data-target="website-take-quiz.html">
                                <div class="media-left">
                                    <div class="text-crt">6.</div>
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                </div>
                                <div class="media-right">
                                    <div class="width-100 text-right text-caption">10:00 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    
                    <?php include('includes/student_nav_bar_options.php')?>
                    
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Instructor</h4>
                        </div>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>/images/people/110/guy-6.jpg" alt="About <?php echo $couses_provider ?>" width="60" class="img-circle" />
                                </div>
                                <div class="media-body">
                                    <h4 class="text-title margin-none"><a href="#"><?php echo $couses_provider ?></a></h4>
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
                </div>
            </div>
        </div>
    </div>