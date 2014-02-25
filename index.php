<?php 
	/**
	  * @author Avila Arrezol Irma Araceli
	  * 
	 */
	 
	 if(isset($_GET['controlador']))
		switch($_GET['controlador'])
		{
			case 'lista':
				require('controlers/listaCtrl.php');
				$controler = new listaCtrl();
				break;
			default:
				//Code
				break;
		}
		$controler->ejecutar();
?>