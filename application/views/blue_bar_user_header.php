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
                    <span class="label bg-blue-500">
					
					
					<?php if ($this->session->userdata('admin')){// if user is also admin load the admin navbar menu 
				echo	'ADMINISTRATOR';
					}
				
				elseif ($this->session->userdata('instructor')){// if user is also instructor load the admin navbar menu 
					echo	'INSTRUCTOR';
					}
					elseif ($this->session->userdata('manager')){// if user is also instructor load the admin navbar menu 
					echo	'MANAGER';
					}
						
					elseif ($this->session->userdata('student')){// if user is also instructor load the admin navbar menu 
						echo	'STUDENT';
						}
							elseif ($this->session->userdata('member')){// if user is also instructor load the admin navbar menu 
								echo	'MEMBER';
							}
								else{
									echo	'PUBLIC';
									
									} ?>
                    
                    </span>
                </div>
            </div>
        </div>
    </div>