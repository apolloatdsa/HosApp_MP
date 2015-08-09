<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->


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
                            <a class="btn btn-white" href="#"><i class="fa fa-th"></i></a>
                            <a class="btn btn-grey-900" href="#"><i class="fa fa-list"></i></a>
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
                                    <span class="badge pull-right">10+</span>
                                    <a class="list-group-link" href="#">Sales and Marketing Staff</a>
                                </li>
                                <li class="list-group-item ">
                                    <span class="badge pull-right">15+</span>
                                    <a class="list-group-link" href="#">Food Preparation Staff</a>
                                </li>
                              <li class="list-group-item">
                                    <span class="badge pull-right">12+</span>
                                    <a class="list-group-link" href="#">Management</a>
                                </li>
                                <li class="list-group-item ">
                                    <span class="badge pull-right">10+</span>
                                    <a class="list-group-link" href="#">Support Staff</a>
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
              
                    
                </div>
            </div>
        </div>
    </div>
   