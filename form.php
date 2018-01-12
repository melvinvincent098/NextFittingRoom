<!DOCTYPE HTML>
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
			<h1><a href="index.html">next</a></h1>
			
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
	
	<div id="page">
		<div id="content">
            <form name="form1" method="post" action="cms/process/insertRecord.php">
		            <div class="form">

		                  	<label for="UserName">Name</label>
		                    <input type="text" name="UserName" id="UserName"  class="form-control">
		                  
		            </div> 
		            <div class="form">      
		                  
		                    <label for="UserGender">Gender</label>
		                    <select name="UserGender">
		                    	<option value="Men">Men</option>
		                    	<option value="Women">Women</option>
		                    </select>
		                  
		            </div> 
		             <div class="form">      
		                  
		                    <label for="UserColour">Ethinicity</label>
		                    <select name="UserColour">
		                    	<option value="White">White</option>
		                    	<option value="Black">Black</option>
		                    </select> 
					</div> 
					 <div class="form">      
		                  
		                    <label for="UserHairColour">Hair Colour</label>
		                    <select name="UserHairColour">
		                    	<option value="Blonde">Blonde</option>
		                    	<option value="Brown">Brown</option>
		                    </select> 
		            </div> 
		            <div class="form">          
		                 
		                    <label for="UserSize">Size</label>
		                    <select name="UserSize">
									  <option value="XS">XS</option>
									  <option value="S">S</option>
									  <option value="M">M</option>
									  <option value="L">L</option>
							</select>
		                  
		            </div>
		             <div class="form">          
		                 
		                    <label for="UserHeight">Height (cm)</label>
		                    <input type="text" name="UserHeight" id="UserHeight" class="form-control">
		                  
		            </div>
		            <div class="form">  
		                  
		                    <label for="UserDescription"> Description</label>
		                    <textarea name="UserDescription" id="UserDescription" class="form-control"></textarea>
		                  
		            </div> 
		            <div class="form">             
		                  <p>
		                    <input type="submit" name="button" id="button" value="Add Requirment" class="btn btn-default">
		                  </p>
					</div>
					
			</form>
		</div>

	</div>
	<footer>
		<p>© 2018 next retail LTD. all right reserved.</p>
	</footer>
</div>
</body>
</html>
