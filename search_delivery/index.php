
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->	

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		
		<link rel="stylesheet" href="search_delivery/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="search_delivery/css/bootstrap.min.css" />
		
			
		<link rel="stylesheet" href="search_delivery/css/style.css" />
		
	
		<script src="search_delivery/js/jquery-1.10.2.min.js"></script>	
		<script src="search_delivery/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="search_delivery/js/bootstrap.min.js"></script>	
	</head>

	    <div class="loader"></div>
		<script>
			$(window).load(function() {
				$(".loader").fadeOut("slow");
			});
		</script>
	    
	    <div id="wrap">
	    	        
	        <div class='row'><!-- table starts here -->	        	
	         <div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-2 col-md-offset-2">
				<form id='students' method='post' name='students' action='recebe_sabores.php'>
				
				<table class="table table-bordered">
				  <tr>
				    <th><input class='check_all' type='checkbox' onclick="select_all()"/></th>
				    <th>S. No</th>
				    <th>Sabor Pizza</th>
				    <th>Preço</th>
				    <th>Código</th>
				    <!-- <th>Categoria</th> -->
				  </tr>
				  <tr>
				    <td><input type='checkbox' class='case'/></td>
				    <td><span id='snum'>1.</span></td>
				    <td><input type='text' id='countryname_1' name='countryname[]' autofocus/></td>
				    <td><input type='text' id='country_no_1' name='country_no[]'/></td>
				    <td><input type='text' id='phone_code_1' name='phone_code[]'/></td>
				    <!-- <td><input type='hidden' id='country_code_1' name='country_code'/> </td> -->
				  </tr>
				  <tr>
				    <td><input type='checkbox' class='case'/></td>
				    <td><span id='snum'>2.</span></td>
				    <td><input type='text' id='countryname_1' name='countryname[]'/></td>
				    <td><input type='text' id='country_no_1' name='country_no[]'/></td>
				    <td><input type='text' id='phone_code_1' name='phone_code[]'/></td>
				    <!-- <td><input type='hidden' id='country_code_1' name='country_code'/> </td> -->
				  </tr>
				</table>
				
				<!-- <button type="button" class='btn btn-danger delete'>- Delete</button> -->
				<!-- <button type="button" class='btn btn-success addmore'>+ Add More</button> -->
				<button type="submit" class='btn btn-primary'>Selecionar</button>
				</form>
			</div>	
		 </div><!-- table ends here -->        
	        
	        
	    </div>
	    
		<script src="search_delivery/js/auto.js"></script>

