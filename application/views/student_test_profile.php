
    <div class="page-section bg-white">
        <div class="container">
           <div class="parallax cover overlay  margin-none" style="height: 600px;">
        
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-opacity="true" data-speed="8">
            <div >
                <div class="col-md-6  page-section">
                
               
                
                <table class="table ">
                <?php echo form_open_multipart('online_training/user_image_upload');  ?>
                        <thead>
                          <tr>
                            <th>Upload image</th>
                            <th> <?php echo form_open_multipart('online_training/user_image_upload');  ?></th>
                           
                          </tr>
                        </thead>
                        <tbody>
                        
                          <tr>
                            <td> Select File To Upload:</td>
                            <td><input type="file" name="userfile"  /></td>
                            
                          </tr>
                          <tr>
                            <td><?php echo $error;  ?></td>
                            <td><input type="submit" name="submit" value="Upload image" class="btn btn-success" /></td>
                            
                          </tr>
                		  </tbody>
                          </form>
                      </table>
                      
                      
                      
                      
                
				
                    </div>	
                    
                    
                    
                    

                </div>
            </div>
        </div>
    </div>
    
           
        </div>
    </div>
   
    
    

   