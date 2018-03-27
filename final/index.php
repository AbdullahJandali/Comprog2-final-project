<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Rock+Salt" rel="stylesheet"> 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide|VT323" rel="stylesheet">

	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

		
	<a href="index.php"><span class="name">
		UnboX 
	</span></a>

	<div class="sidenav" id="stick" class="line-1 anim-typewriter">
			<a href="index.php"><i class="fas fa-home"></i></a><br>
			<a href="console.php"><i class="fas fa-gamepad" class="dropbtn"></i></a>
			<br>
			<div class="dropdown">			
				<i class="fas fa-user" class="dropbtn">
					<div class="dropdown-content">
					    <a href="login.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
					    <a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
					</div>
				</i>
			</div>
			<br>
			<a href="cartshopping.php" class="cart-link" title="View Cart"><i class="fas fa-shopping-cart"></i></a>
	<div>
			<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error succcess">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Hi <strong><?php echo $_SESSION['username']; ?></strong>!</p>
			<p><a href="index.php?logout='1'" style="color: blue; font-family: 'Press Start 2P', cursive;">Logout</a></p>
		<?php endif ?>
	</div>
		<span>
		<a href="xbox.php"><img class="mySlides" src="xboxones.jpg"></a>
		<a href="ps4.php"><img class="mySlides" src="play4.jpg"></a>
		<a href="switch.php"><img class="mySlides" src="switch.jpg"></a>
		</span>
	</div><br>

	<div>
		<a href="ps4.php"><img class="images" src="https://media.giphy.com/media/r6pdwYo8Oj91m/giphy.gif"></a>
		<p class="line-1 anim-typewriter">Virtual Reality</p>

		<a href="xboxonex.php"><img class="images" src="https://media.giphy.com/media/3ohhwDS2KFXlwtGQgg/giphy.gif"></a>
		<p class="line-1 anim-typewriter">Xbox One X</p>

		<a href="ps4.php"><img class="images" src="https://media.giphy.com/media/cnFoayRgmwJvG/giphy.gif"></a>
		<p class="line-1 anim-typewriter">PlayStation 4</p>
	</div>
</div>

</body>

<script type="text/javascript">
		var slideIndex = 0;
		carousel();

		function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	      x[i].style.display = "none";
	    }
	    slideIndex++;
	    if (slideIndex > x.length) {slideIndex = 1}
	    x[slideIndex-1].style.display = "block";
	    setTimeout(carousel, 2000); // Change image every 2 seconds
	}
</script>
</html>