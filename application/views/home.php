<!--
Author: Thomas Delaney
Workshop: CodeIgniter MVC Webservice Assignment
Student ID: D14126353
Date:2015/06/09
Ref:
A Bootstrap starter template was used in this assessment
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thomas Delaney MVC assessment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button > <a class="navbar-brand" href="#"></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li id="nav-home">
							<a href="#">Thomas Delaney MVC JSON assignment</a>
						</li>
						
					</ul>
					
				</div>
				
			</nav>
			<div id="jumbo-home" class="jumbotron">
				<h3>
					Page one.
				</h3>
				
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
        
			<p>The Breezecatcher api has access to a database that contains nine product. The api URI to get all products is<strong> <a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products" target="_blank">http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products</a></strong> or it can access any one product by appending the URI with <strong>/product_id</strong> where <strong>product_id</strong> is <strong>1</strong> to <strong>9</strong>. If an invalid product_id is supplied it will return an error message.</p>
				<p> 
                The second end point api can collect a product description with url links to the Breezecatcher website along with stock availability and other product information.<strong> <a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/productsDesc" target="_blank">http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/productsDesc</a></strong> . The api can access any one product by appending the URI with <strong>/sku</strong> where the (stock keeping unit) <strong>sku</strong> is one of the following <strong>TS4-140, TS3-100, TS3-125, TS4-140, TS4-36M, PLD-204, WOOD-PLD-272, HD4-270, CVR-001</strong>. </p>
            <p>
            <h3>
					Breezecatcher product by id.
				</h3
            		><ul>
						<li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products" target="_blank">Breezecatcher all product api </a>
						</li>
						<li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products/1" target="_blank">Breezecatcher product 1  </a>
						</li>
                        <li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products/3" target="_blank">Breezecatcher product 3  </a>
						</li>
                         <li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products/5" target="_blank">Breezecatcher product 6  </a>
						</li>
                        
                        <li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products/25" target="_blank">Breezecatcher invalid product id  </a>
						</li>
                        
					</ul>
            
            
            </p>
			
            <p>
            
            	<h3>
					Breezecatcher product descriptions by sku.
				</h3
            
            		><ul>
						<li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/productsDesc" target="_blank">Breezecatcher all product description api </a>
						</li>
						<li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/productsDesc/TS4-140" target="_blank">Breezecatcher product TS4-140  </a>
						</li>
                        <li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/productsDesc/HD4-270" target="_blank">Breezecatcher product HD4-270  </a>
						</li>
                         <li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/productsDesc/WOOD-PLD-272" target="_blank">Breezecatcher product WOOD-PLD-272  </a>
						</li>
                        
                        <li>
							<a href="http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products/TS4-36MB" target="_blank">Breezecatcher invalid product sku  </a>
						</li>
                        
					</ul>
            
            </p>
            
			<p>
			 An example jQuery $.getJSON function is available in the JS folder script.js file.
			</p>
            <p>
             
            </p>
		</div>
		
	</div>
        <div class="row clearfix">
            <div class="col-md-6 column" >
    
            
            <div class="panel panel-info">
            <div class="panel-heading"><button class="btn btn-success" id="button-products">Click to run getJSON and display product 2 data </button> </div>
                      <div class="panel-body" id="display_area" >
                        
                      </div>
                      <div class="panel-footer"><span> <button class="button-default" id="clear">Clear display </button> </span> </div>
                    </div>
            
            </div>
            
            </div>
       </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
                    
						<li id="nav-home">
							<a href="#">Thomas Delaney MVC JSON assignment</a>
						</li>
					
					</ul>
					
				</div> 
</div>

</body>
</html>
