<?php  
if(!session_start()){session_start();}
require_once('lib/config.php');
//require_once('lib/conexion.php');

		//print_r($_SESSION); 
print_r($_GET['do']);
if(isset($_GET['do']) && $_GET['do'] != ""){
	$ruta = $_GET['do'];
	switch($ruta){
		case 'administrador':
			
		include(PREFIJO.'login.php');
		break;	
	}
}else{
		include(PREFIJO.'principal.php');
		break;
	 }

 ?>