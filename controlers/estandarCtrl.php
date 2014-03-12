<?php
	/**
	  * Controlador estandar
	  * @autor
	  * @since
	  */
	  
	 class estandarCtrl {
		
		function __construct(){
			
		}

		function validarNombre($nombre){
			$p="/^[a-zA-ZñÑ\s\W]+([\s][a-zA-ZñÑ\s\W]+)*$/i";
			if(preg_match($p,$nombre)==1){
				return 1;
			}
			return 2;
		}
		function validarCorreo($correo){
			$p="/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]*)$/i";
			if(preg_match($p,$correo)==1){
				return 1;
			}else
				return 2;	
		}
		function validarUrl($url){
			$p="/^(([html]|[a-z])*:\W*|(www.))[a-z]*[0-9]*\.[a-z\.]{3,}/i";
			if(preg_match($p,$url)==1){
				return 1;
			}else
				return 2;
		}
		function validarGithub($git){
			$p="/[a-zA-ZñÑ\s]*[0-9]*/i";
			if(preg_match($p,$git)==1){
				return 1;
			}else
				return 2;
		}
		function validarCelular($cel){
			$p="/[0-9]{10}/i";
			if(preg_match($p,$cel)==1){
				return 1;
			}else
				return 2;
		}
		function validarCodigo($codigo){
			$p="/^[a-z]?[0-9]{8,9}?/i";
			if(preg_match($p,$codigo)==1){
				return 1;
			}else
				return 2;
		}
		function validarEquipo($equipo){
			$p="/[a-zA-ZñÑ\s]*[0-9]*/i";
			if(preg_match($p,$equipo)==1){
				return 1;
			}else
				return 2;
		}
		function validarCarrera($carrera){
			$lista= array('1' => "Computacion",'2' => "Informatica",'3' => "Electronica");
			$p="/^[a-zA-ZñÑ\s\W]+([\s][a-zA-ZñÑ\s\W]+)*$/i";
			if(preg_match($p,$carrera)==1){
				if (in_array($carrera,$lista)) {
					return 1;
				}else
					return 2;
				
			}else
				return 2;
		}
	
	}
?>