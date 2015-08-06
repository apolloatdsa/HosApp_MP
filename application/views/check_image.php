<?php

// checks to see if the user has an image in the /images/members folder
// if no image exists then it will use a placeholder image

$url=base_url();
								$filename = "./images/members/$id-$last_name.JPG";
								//echo $filename;
								
								if (file_exists($filename)){
									
							$image =	"$url/images/members/$id-$last_name.JPG" ;
								
								}else{
									$image =	"$url/images/people/110/user-placeholder.png" ;
									}
?>						