<?php
	/*
	 * Modelo para alumnos
	 */
	
	class alumnoMdl
	{
		public $conexion;
		public $datos;
		
		function __construct()
		{

		}
		
		function alta($datos){

			if($datos==03){
				return true;
			}else{
				return false;
			}
			
		}
	}
?>