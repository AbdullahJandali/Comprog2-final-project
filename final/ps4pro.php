<?php include('server.php'); ?>

<!DOCTYPE html>
<head>
	<title>Introducing PS4 pro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styleps4pro.css">
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<section class="intro">
<!-- <a class="bts" href="ps4.html">PS4</a><a class="bts" href="#home">VR</a><a class="bts" href="#home">Help</a> -->
		<div class="inner">
			<div class="content">
				<!-- <div class="title"> -->

				
		
			<section  class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
					<img class="logo" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-playstation-4-logo-01-us-09jun16?$native_sm$">
			</section>
			
																
			</div>
		</div>
		
		

	</section>
	<h1 class="specs">Introducing the PlayStation 4 PRO
Now lighter and slimmer than ever before<br>
1TB hard drive
All the greatest games, TV, music and more.</h1><br>
	<img class="slim" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-slim-horizontal-product-shot-01-us-17nov16?$native_md_nt$"></img>
	<h1 class="only">Only on PLAYSTAION</h1><h1 class="only">You've come to the right place.<br> Exclusive games take you on incredible journeys,<br> from critically acclaimed indies to award-winning AAA hits.</h1><img class="war" src="https://media.giphy.com/media/YqiO23Q2gfurS/giphy.gif" >
	<h1 class="Horizon">Best Exclusive Games.<br><br>
Offering Special Experience.</h1><br><img class="Hori" src="https://media.giphy.com/media/130u4I6sf9d5f2/giphy.gif"><br>
<br>
<br>
<h1 class="last"> *Look for the 'PS4™ Pro Enhanced' icon on software packaging. 'PS4™ Pro Enhanced' features vary by game. Select titles may have enhanced visuals, frame rate, HDR 10 support, or increases in resolution.</h1>
<img class="bye" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-ga-logo-us-10-jun16?$native_md_t$"></img>
<h1 class="adv">Top tier games and top tier accessories wtih magnificent exclusive game of the year!</h1><img  class="div" src="https://cdn.wccftech.com/wp-content/uploads/2015/01/Tom-clancys-the-division.jpeg">
<h1 class="set">Gold Wireless Headset<br></h1>
<h1 class="head">The Gold Wireless Stereo Headset delivers amazing depth and audio clarity,<br> elevating your gaming experience with customizable game modes created by<br> developers exclusively for PlayStation®.<br> High fidelity 7.1 virtual surround sound breathes new life into the urban jungles and<br> alien worlds you explore.<br> This is how games were made to sound.</h1> 

<img class="headset" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-new-gold-headset-us-09jun16?$native_xl_nt$"></img><br><br>
<h1 class="cont">DualShock 4</h1>
<h1 class="ds">
The DualShock®4 Wireless Controller for PlayStation®4 defines this generation of play, combining revolutionary features and comfort with intuitive, precision controls. Evolved analog sticks and trigger buttons allow for unparalleled accuracy with every move while innovative technologies offer exciting ways to experience your games and share your greatest moments.</h1>
<img class="ds4" src="https://media.playstation.com/is/image/SCEA/playstation-4-dualshock-4-front-facing-02-us-14-nov16?$native_xl_nt$">
<h1 class="psvr">Playstation.VR</h1>
<h1 class="vrintro">Redefine your expectations of immersion in gaming with moments so intense your intuition takes over.</h1>
<img class="vrimg" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-playstation-vr-front-image-block-02-us-09jun16-2?$native_xl$">
<section class="ndintro">
	<!-- <img src="http://mapinstitute.org/data/wallpapers/126/im58872990.png" --><div  class="info">© 2018 Sony Interactive Entertainment LLC</div>
</secction>





	


</body>
</html>