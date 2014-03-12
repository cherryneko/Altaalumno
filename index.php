<?php 
	/**
	  * @author Avila Arrezol Irma Araceli
	  *
	  * Validacion de datos de entrada para registro de alumno
	 */
	 
	 if(isset($_GET['ctlr'])){
	 	$p="/[a-z]+/i";
	 	if(preg_match($p,$_GET['ctlr'])==1){
	 		
	 				switch($_GET['ctlr']){
						case 'lista':
							require('controlers/listaCtrl.php');
							$controler = new listaCtrl();
							$controler->ejecutar();	
							break;
						default:
							echo "Controlador invalido";
						break;
					}
					

	 	}else{
	 		echo "No hay controlador";

	 	}
	 }
		
?>