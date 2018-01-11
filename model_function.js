/* 
LIST OF LOADING FUNCTION FOR ALL MODELS AND LIGHTS AND CAMERA AND SCENE
load_scene()
add_light_at_pos(x ,y ,z , color ) // color = 0xffffff
camera_pos(x,y,z)   //10, 27, 0 
run_animate_loop()
load_White_male($slug = false)
load_Black_male($slug = false)
load_White_female($slug = false)
load_White_female($slug = false)

load_male_tshirt()
load_male_trouser(){
load_male_shorts(){
load_female_trouser(){
load_female_tshirt(){
load_brown_female_hair(){
load_blonde_female_hair(){
load_brown_male_hair(){
load_blonde_male_hair(){

*/
function run_animate_loop(){
			function animate() {
			requestAnimationFrame( animate );

			//controls.update();
			renderer.render( scene, camera );
			}
			animate();	
			
}
function add_light_at_pos(x ,y ,z , color ){ // color = 0xffffff
			var light = new THREE.PointLight(color);
        	light.position.set(x,y,z);
			scene.add(light);
}
function camera_pos(x,y,z){ //10, 27, 0);
			controls = new THREE.OrbitControls(camera, document, renderer.domElement);
			camera.position.set(x, y, z);
			controls.update();
	}
function load_scene()
{
    
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
        var mesh;
        var renderer = new THREE.WebGLRenderer({alpha: true});
        renderer.setSize( window.innerWidth, window.innerHeight);
        document.body.appendChild( renderer.domElement );
}

function load_White_male($slug = false){

 			var loader = new THREE.ObjectLoader();
			loader.load("Assets/bodies/white/male/white-male-body.json",function ( obj ) {
				if($slug = false){
				obj3.scale.y = 1;
				obj3.scale.x = 1;
				obj3.scale.z = 1;
				}else{
				obj3.scale.y = $slug['height'];
				obj3.scale.x = $slug['waist'];
				obj3.scale.z = $slug['body-type']; // Athletic , chunky , ect
				}
  			scene.add( obj );
   			obj.position.set(0, 0, 0);
			});


            var loader = new THREE.ObjectLoader();

            if($slug['hair_colour'] == "blonde"){
			loader.load("Assets/hair/male/blonde-male-hair.json",function ( obj2 ) {
				obj2.scale.y = 1;
				obj2.scale.x = 1;
				obj2.scale.z = 1;
			obj2.position.set(-0.1, 0, 0.85);
            scene.add( obj2 );
            
            });
        
            }

             if($slug['hair_colour'] == "brown"){
               
                loader.load("Assets/hair/male/brown-male-hair.json",function ( obj2 ) {
				obj2.scale.y = 1; // = $slug['hair_size']
				obj2.scale.x = 1;
				obj2.scale.z = 1;
			    obj2.position.set(-0.1, 0, 0.85);
                 scene.add( obj2 );
            
            });

             }

}



function load_Black_male($slug = false){

 			var loader = new THREE.ObjectLoader();
			loader.load("Assets/bodies/black/male/black-male-body.json",function ( obj ) {
				if($slug = false){
				obj3.scale.y = 1;
				obj3.scale.x = 1;
				obj3.scale.z = 1;
				}else{
				obj3.scale.y = $slug['height'];
				obj3.scale.x = $slug['waist'];
				obj3.scale.z = $slug['body-type']; // Athletic , chunky , ect
				}
  			scene.add( obj );
   			obj.position.set(0, 0, 0);
			});


		 if($slug['hair_colour'] == "blonde"){
			loader.load("Assets/hair/male/blonde-male-hair.json",function ( obj2 ) {
				obj2.scale.y = 1;
				obj2.scale.x = 1;
				obj2.scale.z = 1;
			obj2.position.set(-0.1, 0, 0.85);
            scene.add( obj2 );
            
            });
        
            }

             if($slug['hair_colour'] == "brown"){
               
                loader.load("Assets/hair/male/brown-male-hair.json",function ( obj2 ) {
				obj2.scale.y = 1; // = $slug['hair_size']
				obj2.scale.x = 1;
				obj2.scale.z = 1;
			    obj2.position.set(-0.1, 0, 0.85);
                 scene.add( obj2 );
            
            });

             }

}

function load_White_female($slug = false){
			
 			var loader = new THREE.ObjectLoader();
			loader.load("Assets/bodies/white/female/white-female-body.json",function ( obj3 ) {
				if($slug = false){
				obj3.scale.y = 1;
				obj3.scale.x = 1;
				obj3.scale.z = 1;
				}else{
				obj3.scale.y = $slug['height'];
				obj3.scale.x = $slug['waist'];
				obj3.scale.z = $slug['body-type']; // Athletic , chunky , ect
				}
  			scene.add( obj3 );
   			obj3.position.set(10, 0, 0);
			});


			var loader = new THREE.ObjectLoader();       
             if($slug['hair_colour'] == "blonde"){
			loader.load("Assets/hair/female/blonde-female-hair.json",function ( obj2 ) {
				obj4.scale.y = 1; // = $slug['hair_size_y'];
				obj4.scale.x = 0.9;
				obj4.scale.z = 1;
			obj2.position.set(-0.1, 0, 0.85);
            scene.add( obj2 );
            
            });
        
            }

             if($slug['hair_colour'] == "brown"){
               
               loader.load("Assets/hair/female/brown-female-hair.json",function ( obj2 ) {
				obj4.scale.y = 1;
				obj4.scale.x = 0.9;
				obj4.scale.z = 1;
			    obj2.position.set(-0.1, 0, 0.85);
                 scene.add( obj2 );
            
            });

             }

}

function load_Black_female($slug = false){

 			var loader = new THREE.ObjectLoader();
			loader.load("Assets/bodies/black/female/black-female-body.json",function ( obj3 ) {
				if($slug = false){
				obj3.scale.y = 1;
				obj3.scale.x = 1;
				obj3.scale.z = 1;
				}else{
				obj3.scale.y = $slug['height'];
				obj3.scale.x = $slug['waist'];
				obj3.scale.z = $slug['body-type']; // Athletic , chunky , ect
				}
  			scene.add( obj3 );
   			obj3.position.set(10, 0, 0);
			});


			var loader = new THREE.ObjectLoader();       
             if($slug['hair_colour'] == "blonde"){
			loader.load("Assets/hair/female/blonde-female-hair.json",function ( obj2 ) {
				obj4.scale.y = 1; // = $slug['hair_size_y'];
				obj4.scale.x = 0.9;
				obj4.scale.z = 1;
			obj2.position.set(-0.1, 0, 0.85);
            scene.add( obj2 );
            
            });
        
            }

             if($slug['hair_colour'] == "brown"){
               
               loader.load("Assets/hair/female/brown-female-hair.json",function ( obj2 ) {
				obj4.scale.y = 1;
				obj4.scale.x = 0.9;
				obj4.scale.z = 1;
			    obj2.position.set(-0.1, 0, 0.85);
                 scene.add( obj2 );
            
            });

             }

}


function load_male_tshirt(){

            var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/male/tshirt-male.json",function ( obj6 ) {
				obj6.scale.y = 1;
				obj6.scale.x = 0.95;
				obj6.scale.z = 1;
			obj6.position.set(-2.3, 0, -0.2);
			scene.add( obj6 );
			scene.r
			});

    
}
 load_male_tshirt()
function load_male_trouser(){

    var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/male/trouser-male.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});

    
}

function load_male_shorts(){

	var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/male/shorts-male.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});

    
}

function load_female_dress(){

	var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/female/dress-female.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});

}
      
function load_female_trouser(){

var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/female/trouser-female.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});
}
     
function load_female_tshirt(){

var loader = new THREE.ObjectLoader();
			loader.load("Assets/clothing/female/tshirt-female.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});
}
       
function load_brown_female_hair(){
var loader = new THREE.ObjectLoader();
			loader.load("Assets/hair/female/brown-female-hair.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});

}

   
function load_blonde_female_hair(){
var loader = new THREE.ObjectLoader();
			loader.load("Assets/hair/female/blonde-female-hair.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});

}


function load_brown_male_hair(){

var loader = new THREE.ObjectLoader();
			loader.load("Assets/hair/male/brown-male-hair.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});
}


function load_blonde_male_hair(){

var loader = new THREE.ObjectLoader();
			loader.load("Assets/hair/male/blonde-male-hair.json",function ( obj5 ) {
				obj5.scale.y = 1;
				obj5.scale.x = 1;
				obj5.scale.z = 1;
			obj5.position.set(0, 0, 0);
			scene.add( obj5 );
			});

}