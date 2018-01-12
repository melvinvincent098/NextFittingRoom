
<?php


if($_GET['g'] == 'Women' && $_GET['c'] == 'Black'){
	$modelPath = "Assets/bodies/black/female/female-body.json";
}
if ($_GET['g'] == 'Men' && $_GET['c'] == 'Black'){
	$modelPath =  "Assets/bodies/black/male/male-body.json";
}
if ($_GET['g'] == 'Women' && $_GET['c'] == 'White'){
	$modelPath =  "Assets/bodies/white/female/female-body.json";
}
if ($_GET['g'] == 'Men' && $_GET['c'] == 'White'){
	$modelPath =  "Assets/bodies/white/male/male-body.json";
}
if($_GET['h'] == 'Women' && $_GET['c'] == 'Black'){
	$modelPath = "Assets/bodies/black/female/female-body.json";
}
if($_GET['h'] == 'Blonde' && $_GET['g'] == 'Men'){
	$modelPathHair = "Assets/hair/male/blonde-male-hair.json";
}
if($_GET['h'] == 'Brown' && $_GET['g'] == 'Men'){
	$modelPathHair = "Assets/hair/male/brown-male-hair.json";
}
if($_GET['h'] == 'Blonde' && $_GET['g'] == 'Women'){
	$modelPathHair = "Assets/hair/female/blonde-female-hair.json";
}
if($_GET['h'] == 'Brown' && $_GET['g'] == 'Women'){
	$modelPathHair = "Assets/hair/female/brown-female-hair.json";
}




?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/scene.css">
		<script src="js/three.js"></script>
		<script src="js/OrbitControls.js"></script>
		<script src="js/loadFunctions.js"></script>
		<title>Next Virtual Fitting Room</title>
	</head>
	
	<body>
	<header>
		<div class="topBar">
		<div id="logo">
			<h1><a href="index.php">next</a></h1>
			
	
		</div>
		<nav>
			<ul>
				<li><a href="index.php" title="Home">Home</a></li>
				<li><a href="male.php" title="Mens">Mens</a></li>
				<li><a href="female.php" title="Womens">Womens</a></li>
				<li><a href="dressing.php" title="Contact Us">Contact Us</a></li>
			</ul>
		</nav>
		</div>
	</header>
	<div id="container">
			<div class="button">
		<ul>
					<?php if($_GET['g'] == 'Women') {?>
					
						
						<li><img src="images/dress.png" width="100" height="100" type="submit" onclick = "Add_dress()" ></li>
						<li><img src="images/trouserf.png" width="100" height="100" type="submit" onclick = "Add_trousers()" ></li>
						<li><img src="images/t-shirtf.png" width="100" height="100" type="submit" onclick = "Add_top()" ></li>
						
					<?php } if($_GET['g'] == 'Men')  {?>
					
						<li><img src="images/trouserm.png" width="100" height="100" type="submit" onclick = "Add_M_trousers()"  ></li>
						<li><img src="images/t-shirtm.png" width="100" height="100" type="submit" onclick = "Add_tshirt()" ></li>
						<li><img src="images/shortsm.png" width="100" height="100" type="submit"  onclick = "Add_shorts()" ></li>

					<?php	 }?>	
		</ul>


		</div>

		<div id="canvasHolder"></div>

		<footer>
		<p>© 2018 next retail LTD. all right reserved.</p>
	</footer>



	</div>	



			<script>
			var loadedM = false;
			var loadedMS = false;
			var loadedMTs = false;
			var loadedMT = false;
			var loadedF = false;
			var loadedFD = false;
			var loadedFTs = false;
			var loadedFT = false;	


			var scene = new THREE.Scene();
			var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
			var mesh;
			var renderer = new THREE.WebGLRenderer({alpha: true});
			renderer.setSize( window.innerWidth=700, window.innerHeight=700);
			document.body.appendChild( renderer.domElement );
			document.getElementById('canvasHolder').appendChild(renderer.domElement );


			
load_body();
function load_body(){


	var loader = new THREE.ObjectLoader();
			loader.load("<?php echo $modelPath; ?>",function ( obj ) {
				obj.scale.y = 1;
				obj.scale.x = 1;
				obj.scale.z = 1;
  			scene.add( obj );
   			obj.position.set(0, 0, 0);
			});


			var loader = new THREE.ObjectLoader();
			loader.load("<?php echo $modelPathHair; ?>",function ( obj2 ) {
				obj2.scale.y = 1;
				obj2.scale.x = 1;
				obj2.scale.z = 1;
			<?php if($_GET['g'] == 'Men') { ?>
			obj2.position.set(-0.1, 0.85, 0);
			<?php } if($_GET['g'] == 'Women') { ?>
			obj2.position.set(-0.1, 0.045, -1.8);
			<?php } ?>
			scene.add( obj2 );
			});



			loadedM = true;
			loadedF = true;			
}

function remove_male_Shorts(obj) 
{
    var selectedObject = scene.getObjectByName("bobs shorts");
    scene.remove( selectedObject );
    animate();
}

function Add_shorts()
{
if (loadedMT == true)
{
	remove_male_trousers();
	loadedMT = false;
}	
if (loadedMS == false &&  loadedM == true && loadedMT == false)
{
			var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/male/Male-Medium-Shorts.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
				obj5.name = "bobs shorts";
			obj5.position.set(-0.3, 0, -0.2); 	
			obj5.rotation.set(9.4,-0.1,0);
			scene.add( obj5 );
			});
			loadedMS = true;
}
else if (loadedMS == true)
{
	remove_male_Shorts();
	loadedMS = false;
}
}

function Add_tshirt()
{
if (loadedMTs == false &&  loadedM == true)
{
			var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/male/Male-T-Shirt.json",function ( obj6 ) {
				obj6.scale.y = 0.75;
				obj6.scale.x = 0.95;
				obj6.scale.z = 1;
				obj6.name = "bobs t";
			obj6.position.set(0.1, 17.2, -0.625);
			scene.add( obj6 );
			});
			loadedMTs = true;
}
else if (loadedMTs == true)
{
	remove_male_tshirt();
	loadedMTs = false;
}			
}

function remove_male_tshirt(obj) 
{
    var selectedObject = scene.getObjectByName("bobs t");
    scene.remove( selectedObject );
    animate();
}


function Add_M_trousers()
{
if (loadedMS == true)
{
	remove_male_Shorts();
	loadedMS = false;
}
if (loadedMT == false &&  loadedM == true && loadedMS == false)
{
			var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/male/Male-Jeans.json",function ( obj7 ) {
				obj7.scale.y = 1;
				obj7.scale.x = 1.02;
				obj7.scale.z = 1.1;
				obj7.name = "bobs trousers";
			obj7.position.set(0, 0, -2);
			scene.add( obj7 );
			});
			loadedMT = true;
}
else if (loadedMT == true)
{
	remove_male_trousers();
	loadedMT = false;
}	
}

function remove_male_trousers(obj) 
{
    var selectedObject = scene.getObjectByName("bobs trousers");
    scene.remove( selectedObject );
    animate();
}

//WOMAN/////////////////////////////////////////////////////////

function load_female()
{
if (loadedF == false && loadedM == false)
{
 			var loader = new THREE.ObjectLoader();
			loader.load("Assets/bodies/female/female-body.json",function ( obj3 ) {
				obj3.scale.y = 1;
				obj3.scale.x = 1;
				obj3.scale.z = 1;
				obj3.name = "sally";
  			scene.add( obj3 );
   			obj3.position.set(0, 0, 0);
			});


			var loader = new THREE.ObjectLoader();
			loader.setTexturePath("Assets/textures/skinWhite.jpg");
			loader.load("Assets/hair/female/hair-female.json",function ( obj4 ) {
				obj4.scale.y = 1;
				obj4.scale.x = 0.9;
				obj4.scale.z = 1;
				obj4.name = "sally's hair";
			obj4.position.set(0, 0, 1.85);
			var length = obj4.length;
			scene.add( obj4 );
			});
		loadedF = true;
}
else if (loadedF == true)
{
	remove_female();
	loadedF = false;	
	remove_female_tshirt();
	loadedFTs = false;
	remove_female_trousers();
	loadedFT = false;
	remove_female_dress();
	loadedFD = false;

}
}

function remove_female(obj) 
{
    var selectedObject = scene.getObjectByName("sally");
    scene.remove( selectedObject );
    var selectedObject = scene.getObjectByName("sally's hair");
    scene.remove( selectedObject );
    animate();
}

function Add_dress()
{
	if (loadedFT == true)
{
	remove_female_trousers();
	loadedFT = false;
}
if (loadedFD == false && loadedF == true && loadedFT == false)
{
			var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/female/dress-female.json",function ( obj8 ) {
				obj8.scale.y = 1;
				obj8.scale.x = 1;
				obj8.scale.z = 1;
				obj8.name = "sallys dress";
			obj8.position.set(0, 0, -1);
			scene.add( obj8 );
			});
		loadedFD = true;
}
else if (loadedFD == true)
{
	remove_female_dress();
	loadedFD = false;
}
}

function remove_female_dress(obj) 
{
    var selectedObject = scene.getObjectByName("sallys dress");
    scene.remove( selectedObject );
    animate();
}


function Add_top()
{
if (loadedFTs == false && loadedF == true)
{
			var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/female/tshirt-female.json",function ( obj10 ) {
				obj10.scale.y = 1;
				obj10.scale.x = 1;
				obj10.scale.z = -1.2;
				obj10.name = "sallys tshirt";
				obj10.position.set(0.1,5,-0.6);
				obj10.rotation.set(9.4,0,0)
			scene.add( obj10 );
			});	
		loadedFTs = true;
}
else if (loadedFTs == true)
{
	remove_female_tshirt();
	loadedFTs = false;
}


}

function remove_female_tshirt(obj) 
{
    var selectedObject = scene.getObjectByName("sallys tshirt");
    scene.remove( selectedObject );
    animate();
}




function Add_trousers()
{
	if (loadedFD == true)
	{
		remove_female_dress();
		loadedFD = false;
	}
if (loadedFT == false && loadedF == true && loadedFD == false)
{
			var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/female/trouser-female.json",function ( obj9 ) {
				obj9.scale.y = 1;
				obj9.scale.x = 1;
				obj9.scale.z = 0.8;
				obj9.name = "sallys trousers";
				obj9.position.set(-0.2, 0, 0);
				obj9.rotation.set(9.4,0,0);
			scene.add( obj9 );
			});
		loadedFT = true;
}
else if (loadedFT == true)
{
	remove_female_trousers();
	loadedFT = false;
}
}

function remove_female_trousers(obj) 
{
    var selectedObject = scene.getObjectByName("sallys trousers");
    scene.remove( selectedObject );
    animate();
}






//Hair//////////////////////////////////////////////////////////////////////////
//Male--------------------------------------------------------------------------

// //Female-------------------------------------------------------------------------



//CAMERA////////////////////////////////////////////////////////////////////////
			controls = new THREE.OrbitControls(camera, document, renderer.domElement);
			camera.position.set(10, 27, 30);
			controls.update();






//LIGHTS////////////////////////////////////////////////////////////////////////
			var light = new THREE.PointLight(0xffffff);
        	light.position.set(200,200,200);
        	scene.add(light);

			var light = new THREE.PointLight(0xffffff);
        	light.position.set(-400,400,-400);
        	scene.add(light);
//LIGHTS////////////////////////////////////////////////////////////////////////



//ANIMATE LOOP//////////////////////////////////////////////////////////////////
			function animate() {
			requestAnimationFrame( animate );

			//controls.update();
			renderer.render( scene, camera );
			}
			animate();			    
//ANIMATE LOOP//////////////////////////////////////////////////////////////////			

		</script>



	</body>
</html>



