<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Consoles</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Rock+Salt" rel="stylesheet"> 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="http://allfont.net/allfont.css?fonts=zrnic" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">

	<style type="text/css">
/*		/*animation typewriter*/
	.line-1{
		font-family: 'Audiowide', cursive; 
	    position: inherit;
	    top: 50%;  
	    color: white;
	    mix-blend-mode: difference;
	    width: 24em;
	    margin: 0 auto;
	    border-right: 2px solid rgba(255,255,255,.75);
	    font-size: 280%;
	    text-align: center;
	    white-space: pre;
	    overflow: hidden;
	    transform: translateY(-350%) translateX(-100%);    
	}

	/* Animation */
	.anim-typewriter{
	  animation: typewriter 4s steps(44) 1s 1 normal both,
	             blinkTextCursor 500ms steps(44) infinite normal;
	}
	@keyframes typewriter{
	  from{width: 0;}
	  to{width: 9em;}
	}
	@keyframes blinkTextCursor{
	  from{border-right-color: gray;}
	  to{border-right-color: transparent;}
	}*/


	i {
		cursor: pointer;
	}

	.mySlides {
		width: 80%;
		height: auto;
		padding: 10%;
		position: inherit;
		margin-left: 10%;
	}

	.name {
		float: left;
		position: fixed;
		font-family: 'Press Start 2P', cursive;
		padding-left: 5%;
		margin-top: 50px;
		font-size:3vw;
		border-right: .15em solid orange;
		white-space: nowrap;
		width: 7.3em;
		overflow: hidden;
	    opacity: 0;
		-webkit-animation: type3 5s steps(20, end), blink .5s step-end infinite alternate;
		animation: type3 5s steps(20, end), blink .5s step-end infinite alternate;
		-webkit-animation-delay: 1s;
		animation-delay: 1s;
		-webkit-animation-fill-mode: forwards;
		animation-fill-mode: forwards;
		}

	@keyframes type3 {
	  0% {
	    width: 0;
	  }
	  1% {
	    opacity: 1;
	  }
	  100% {
	    opacity: 1;
	  }
	}

	@-webkit-keyframes type3 {
	  0% {
	    width: 0;
	  }
	  1% {
	    opacity: 1;
	  }
	  100% {
	    opacity: 1;
	  }
	}

	@keyframes blink {
	  50% {
	    border-color: transparent;
	  }
	}
	@-webkit-keyframes blink {
	  50% {
	    border-color: transparent;
	  }
	}

	.sidenav {
		float: left;
		position: fixed;
		padding-top: 10%;
	}

	.sidenav:hover {
		opacity: 1;
	}
	.sidenav i {
	    position: relative;
	    left: -50px;
	    transition: 0.3s;
	    padding: 15px;
	    width: 100px;
	    color: gray;
	}

	.sidenav i:hover {
	    left: 0; 
	    color: black;
	}

	.fas {
	    font-size: 4em;
	}

	.fas-fa-home {
		top: 20%;
	}

	.fas-fa-gamepad {
		top: 80px;
	}

	.fas-fa-user {
	    top: 140px;
	}

	.fas-fa-shopping-cart {
	    top: 200px;
	}

	.images {
		
		padding-bottom: 1%;
		width:100vw;
		height: auto;
		border:0;
	}

	.fa {
		font-size: 35px;
		color: white;
	    mix-blend-mode: difference;
	}

	.dropdown .dropdown-content .fa:hover {
		left: 15%;
	}

	.dropbtn {
	    background-color: #4CAF50;
	    color: white;
	    padding: 16px;
	    font-size: 16px;
	    border: none;
	}

	a {
		font-size: 15px;
	}

	.dropdown {
	    position: relative;
	    display: inline-block;
	}

	.dropdown-content {
	    display: none;
	    position: inherit;
	    background-color: inherit;
	    min-width: 160px;
	    z-index: 1;
	}

	.dropdown-content a {
	    color: black;
	    padding: 12px 16px;
	    text-decoration: none;
	    display: block;
	}

	.dropdown-content a:hover {
		background-color: #ddd;
	}

	.dropdown:hover .dropdown-content {
	    display: block;
	}

	.dropdown:hover .dropbtn {
	    background-color: inherit;
	}

	.content {
	float: right;
	background: white;
	padding: 10px;
	font-family: 'Press Start 2P', cursive;
	position: relative;
}


	/* Style the tab */
.tab {
    overflow: hidden;;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: white;
    border: none;
    outline: none;
    position: inherit;
    display: inline-block;
    cursor: pointer;
    padding-top: 10%;
    padding-left: 20%;
    opacity: 0.3;
}

/* Change background color of buttons on hover */
.tab button:hover {
 	size: 35px;
 	transition: 0.3s;
}

/* Create an active/current tablink class */
.tab button.active {
    padding: 50px;
    opacity: 1;
    padding-left: 15%;
}

/* Style the tab content */
.tabcontent {
    display: none;
    position: relative;
    padding: 10px 12px;
    border-top: none;
    left: 20%;
}

p {
	font-size: 250%;
	font-family: 'Six Caps', sans-serif;
}

span {

	font-size: 150%;
	font-family: 'Six Caps', sans-serif;
}

	</style>
</head>
<body>
	<a href="index.php"><span class="name">
		UnboX 
	</span></a>

	<div class="sidenav" id="stick" class="line-1 anim-typewriter">
		<!-- <i class="fas fa-search"><input type="text" name="search" placeholder="Search..."></i><br> -->
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
		<i class="fas fa-shopping-cart"></i>
	</div>

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


	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'PlayStation')"><img class="alignnone size-full wp-image-2903" src="http://famfonts.com/wp-content/uploads/playstation-wide.png" alt="PlayStation" srcset="http://famfonts.com/wp-content/uploads/playstation-wide.png 1200w, http://famfonts.com/wp-content/uploads/playstation-wide-300x75.png 300w, http://famfonts.com/wp-content/uploads/playstation-wide-768x192.png 768w, http://famfonts.com/wp-content/uploads/playstation-wide-1024x256.png 1024w, http://famfonts.com/wp-content/uploads/playstation-wide-1080x270.png 1080w" sizes="(max-width: 1200px) 100vw, 1200px" width="210" height="auto"></button>
	  <button class="tablinks" onclick="openCity(event, 'Xbox')"><a href="https://fontmeme.com/xbox-360-font/"><img src="https://fontmeme.com/permalink/180326/a2c2d929c9b19dd2a7e903603a6c0ea7.png" alt="xbox-360-font" border="0"></a></button>
	  <button class="tablinks" onclick="openCity(event, 'Nintendo')"><a href="https://fontmeme.com/nintendo-font/"><img src="https://fontmeme.com/permalink/180326/53a30ffc8755c79acb8d14cbd209b5da.png" alt="nintendo-font" border="0"></a></button>

	</div>

	<div id="PlayStation" class="tabcontent">
	  <div>
	  	<a href="ps4.php"><img src="play4.jpg" width="700" height="auto">
	  	<p>
	  		PlayStation 4  
	  		<span>$349.99</span>
	  	</p></a>
	  </div>

	  <div>
	  	<a href="ps4pro.php"><img src="play4pro.jpg" width="700" height="auto">
	  	<p>
	  		PlayStation4 PRO   
	  		<span>$399.97</span>
	  	</p></a>
	  </div>

	  <div>
	  	<a href="ps4.php"><img src="vr.jpg" width="700" height="auto">
	  	<p>
	  		Virtual Reality   
	  		<span>$399.97</span>
	  	</p></a>
	  </div>
	</div>

	<div id="Xbox" class="tabcontent">
	  	<div>
	  		<a href="xboxonex.php"><img src="xboxonex.jpg" width="700" height="auto">
	  		<p>
		  		Xbox One X
		  		<span>$499.99</span>
		  	</p></a>
	  	</div>

		<div>
		  	<a href="xbox.php"><img src="xboxones.jpg" width="700" height="auto">
		  	<p>
		  		Xbox One S
		  		<span>$249.00</span>
		  	</p></a>
		</div>
	</div>

	<div id="Nintendo" class="tabcontent">
	  	<div>
		  	<a href="switch.php"><img src="switch.jpg" width="700" height="auto">
		  	<p>
		  		Nintendo Switch
		  		<span>$289.99</span>
		  	</p></a>
	  	</div>
	</div>

</body>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</html>