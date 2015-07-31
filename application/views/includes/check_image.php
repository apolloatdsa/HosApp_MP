<?php
$url=base_url();
								$filename = "./images/members/$id-$last_name.JPG";
								//echo $filename;
								
								if (file_exists($filename)){
									
							$image =	"$url/images/members/$id-$last_name.JPG" ;
								
								}else{
									$image =	"$url/images/people/110/user-placeholder.png" ;
									}
?>						