<?php
	/**
	  * @autor Avila Arrezola Irma Araceli
	  *	Controlador de la lista 
	  * @since
	  */
	 require('controlers/estandarCtrl.php'); 

	 class listaCtrl extends estandarCtrl{
		public $modelo;
		
		function __construct(){
			require('models/alumnoMdl.php');
			$this->modelo = new alumnoMdl();
		}
		
		function ejecutar(){
			$modelo;
			if(isset($_GET['action']))
				switch($_GET['action']){

					case 'enlista':

						if(isset($_GET['seccion'])){
							$datos=$_GET['seccion'];
							$status = $this->modelo->alta($datos);
						
							if($status){
							
							include('views/lista.php');
							}else{
								include('views/error.php');
							}
						}else
							require('views/erv.php');
						break;
				}
		}
	 }
?>