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
		
		function alta(){

			echo "Nombre: ".$_GET['nom'];
			echo "<br>";
			echo "Codigo:".$_GET['codi'];
			echo "<br>";
			echo "Carrera: ".$_GET['car'];
			echo "<br>";
			echo "Correo :".$_GET['correo'];
			echo "<br>";
			if (isset($_GET['url'])) {
				echo "URL:".$_GET['url'];
				echo "<br>";
			}
			if (isset($_GET['git'])) {
				echo "Git:".$_GET['git'];
				echo "<br>";
			}
			if (isset($_GET['cel'])) {
				echo "Celular:".$_GET['cel'];
				echo "<br>";
			}
			if (isset($_GET['equi'])) {
				echo "Equipo :".$_GET['equi'];
				echo "<br>";
			}

		}

			
	}
?>