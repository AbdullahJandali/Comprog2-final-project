<?php include('server.php'); ?>

<!DOCTYPE html>
<head>
	<title>Introducing Nintendo Switch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styleswitch.css">
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
					<img class="logo" src="https://img.etsystatic.com/il/f82b99/1333103810/il_570xN.1333103810_ls0e.jpg?version=0">
			</section>
			
																
																		
			</div>
		</div>
		</section> 
	
	<h1 class="specs">Introducing the Switch.
Fast and Enjoyable Gaming with unlimited internet surfing ,
 music , movies and many more.</h1><br>
	<img class="slim" src="https://www.bodyguardz.com/media/catalog/product/cache/8/image/1200x1200/9df78eab33525d08d6e5fb8d27136e95/b/o/bodyguardz-pure-tempered-glass-screen-protector-nintendo-switch-hero.jpg"></img>
	<h1 class="only">Only on Nintendo Switch</h1><h1 class="only">You've come to the right place.<br> Exclusive games take you on incredible journeys,<br> from critically acclaimed indies to award-winning AAA hits.</h1><img class="war" src="https://media.giphy.com/media/DC54r9W4VamNa/giphy.gif" >
	<h1 class="Horizon">Best Exclusive Games.<br><br>
Offering Special Experience.</h1><br><img class="Hori" src="https://media.giphy.com/media/BPSIqCWROI11u/giphy.gif"><br>
<br>
<br>
<h1 class="last"> *Look for the Xbox one Enhanced' icon on software packaging. 'Xbox™ One Enhanced' features vary by game. Select titles may have enhanced visuals, frame rate, HDR 10 support, or increases in resolution.</h1>
<img class="bye" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-ga-logo-us-10-jun16?$native_md_t$"></img>
<h1 class="adv">Top tier games and top tier accessories wtih magnificent exclusive game of the year!</h1><img  class="div" src="https://hdqwalls.com/wallpapers/the-legend-of-zelda-breath-of-the-wilk-2017-game-hd.jpg">
<h1 class="set">Turtle Beach Elite 800X<br></h1>
<h1 class="head">The turtle beach Elite Stereo Headset delivers amazing depth and audio clarity,<br> elevating your gaming experience with customizable game modes created by<br> developers exclusively for Xbox®.<br> High fidelity 7.1 virtual surround sound breathes new life into the urban jungles and<br> alien worlds you explore.<br> This is how games were made to sound.</h1> 

<img class="headset" src="https://smhttp-ssl-65563.nexcesscdn.net/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/5/1500559852_main_hori_nintendo_switch_splatoon_2_splat_and_chat_headset_1.jpg"></img>
<h1 class="cont">SwitchController</h1>
<h1 class="ds">
The Switch Controller defines this generation of play, combining revolutionary features and comfort with intuitive, precision controls. Evolved analog sticks and trigger buttons allow for unparalleled accuracy with every move while innovative technologies offer exciting ways to experience your games and share your greatest moments.</h1>
<img class="ds4" src="https://www.nintendo.com/switch/etRgxnAu0zRX4bmWnt9K628wG7YQUI6t/images/switch/features/closer-joycon-front.jpg">
<!-- <h1 class="psvr">Playstation.VR</h1>
<h1 class="vrintro">Redefine your expectations of immersion in gaming with moments so intense your intuition takes over.</h1>
<img class="vrimg" src="https://media.playstation.com/is/image/SCEA/ps4-june-refresh-playstation-vr-front-image-block-02-us-09jun16-2?$native_xl$"> -->
<section class="ndintro">
	<!-- <img src="http://mapinstitute.org/data/wallpapers/126/im58872990.png" --><div  class="info">© 2018 Nintendo Interactive Entertainment LLC</div>
</secction>





	


</body>
</html>