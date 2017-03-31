<!---
Site : http:www.smarttutorials.net
Author :muni
--->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>jQuery Autocomplete</title>
		<meta name="description" content="jquery autocomplete search-jquery autocomplete using php mysql ajax" />
		<meta name="author" content="muni" />
		<meta name="keywords" content="jquery autocomplete search, jquery autocomplete using php mysql ajax, jquery autocomplete ajax, jquery autocomplete json" />
		

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		
			
		<link rel="stylesheet" href="css/style.css" />
		
	
		<script src="js/jquery-1.10.2.min.js"></script>	
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>

	<body>	
	    <div class="loader"></div>
		<script>
			$(window).load(function() {
				$(".loader").fadeOut("slow");
			});
		</script>
	    <header>
	    	<p class="text-center"><a href="http://www.smarttutorials.net" target="_blank">Smart Tutorials</a></p>
	    </header>
	    
	    <div id="wrap">
	    	<h1 class="text-center">jQuery auto complete using PHP, MySQL and Ajax</h1>
	        <div class="row">
	        	<div class="col-xs-6 col-sm-4 col-md-4 col-xs-offset-6 col-sm-offset-4 col-md-offset-4">
	        		<p class="text-center">please enter country name : </p>
	        		<input id="country_name" class="form-control txt-auto"/>
	        	</div>
	        	
	        </div>
	        
	        <div class="row">
	        	<div class="col-xs-6 col-sm-4 col-md-4 col-xs-offset-6 col-sm-offset-4 col-md-offset-4">
	        		<h2 class="text-center">Enter Fruits Name to Search : </h2>
	        		<input id="fruit" class="form-control txt-auto"/>
	        	</div>
	        	
	        </div>
	        
	        <div class="row">
	        	<div class="col-xs-6 col-sm-4 col-md-4 col-xs-offset-6 col-sm-offset-4 col-md-offset-4">
	        		<h4 class="text-center">Enter Baby Names to Search : </h4>
	        		<input id="baby" class="form-control txt-auto"/>
	        	</div>
	        	
	        </div>
	        
	        <div class='row'><!-- table starts here -->	        	
	         <div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-2 col-md-offset-2">
	         	<h3 class="text-center">Populate Mutiple Textbox with single auto-select Request</h3>	
				<form id='students' method='post' name='students' action='index.php'>
				
				<table class="table table-bordered">
				  <tr>
				    <th><input class='check_all' type='checkbox' onclick="select_all()"/></th>
				    <th>S. No</th>
				    <th>Country Name</th>
				    <th>Country Number</th>
				    <th>Country Phone code</th>
				    <th>Country code</th>
				  </tr>
				  <tr>
				    <td><input type='checkbox' class='case'/></td>
				    <td><span id='snum'>1.</span></td>
				    <td><input type='text' id='countryname_1' name='countryname[]'/></td>
				    <td><input type='text' id='country_no_1' name='country_no[]'/></td>
				    <td><input type='text' id='phone_code_1' name='phone_code[]'/></td>
				    <td><input type='text' id='country_code_1' name='country_code'/> </td>
				  </tr>
				</table>
				
				<button type="button" class='btn btn-danger delete'>- Delete</button>
				<button type="button" class='btn btn-success addmore'>+ Add More</button>
				</form>
			</div>	
		 </div><!-- table ends here --->
	        
	        
	        
	    </div>
	    
	    <footer>
	    	<p class="text-center">Copy rights by <a href="http://www.smarttutorials.net" target="_blank">Smart Tutorials</a> 2013.</p>
	   
	    </footer>
	    
		<script src="js/auto.js"></script>
	</body>
</html>
