
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/scene.css">
		<script src="js/three.js"></script>
		<script src="js/OrbitControls.js"></script>
		<title>My first three.js app</title>
	</head>
	
	<body>
	<header>
		<div class="topBar">
		<div id="logo">
			<h1><a href="index.php">next</a></h1>
			
			<?php 
			if(isset($_SESSION['login'])){
				include('includes/session-logout.inc.php');
			}
			else{
				include('includes/session-login.inc.php');
			}		
			?>
		</div>
		<nav>
			<ul>
				<li><a href="index.php" title="Home">Home</a></li>
				<li><a href="" title="Mens">Mens</a></li>
				<li><a href="" title="Womens">Womens</a></li>
				<li><a href="" title="Contact Us">Contact Us</a></li>
			</ul>
		</nav>
		</div>
	</header>
	<div id="container">
		<div class="three-column">
            <p><img src="images/model3.jpg" width="500" height="400" alt="Spiral Staircase"></p>
            <p><img src="images/model2.jpg" width="470" height="400" alt="Spiral Staircase"></p>
	</div>
		<footer>
		<p>© 2018 next retail LTD. all right reserved.</p>
	</footer>
	</div>	

	</body>
</html>



