<?php include('server.php'); ?>
<?php
// include database configuration file
include 'dbConfig.php';
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylexbox X.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Roboto" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"/>
	<link href="css/waypoints.css" rel="stylesheet"/>
	<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
	<script src="js/waypoints.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="register.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Rock+Salt" rel="stylesheet"> 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide|VT323" rel="stylesheet">
</head>
<body>

	<a href="index.php"><span class="name">
		UnboX 
	</span></a>
	<div class="container" style="padding-top: 10%;">
				
				<div id="products" class="row list-group">
		        	<?php
		        	//get rows query
		        	$query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
		        	if($query->num_rows > 0){ 
		            while($row = $query->fetch_assoc()){
		        	?>
			        	<div class="item col-lg-4">
			            	<div class="thumbnail">
			                	<div class="caption">
			                    	<h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
			                    	<p class="list-group-item-text"><?php echo $row["description"]; ?></p>
			                    		<div class="row">
			                        		<div class="col-md-6">
			                            	<p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
			                        		</div>
			                       			<div class="col-md-6">
			                            		<a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
			                        		</div>
			                    		</div>
			                	</div>
			            	</div>
			        	</div>
			    	</div>
			    	<?php } }else{ ?>
        			<?php } ?>
				</div>

</body>
</html>
	