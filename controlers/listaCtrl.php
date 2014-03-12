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
			$ban=0;

			$p="/[a-z]+/i";

			if(isset($_GET['act']))
				if(preg_match($p,$_GET['act'])==1){
						switch($_GET['act']){
							case 'agrega':

									if(isset($_GET['nom'])){
											
											$nombre=$_GET['nom'];
											$nombre=$this->validarNombre($nombre);
											if($nombre==2){
												echo "<br>";
												echo "Error nombre invalido";
												$ban=1;
											}

									}else{
										echo "<br>";
										echo "Error no ingresaste el nombre";
										$ban=1;
									}

									if(isset($_GET['correo'])){
											$correo=$_GET['correo'];
											$correo=$this->validarCorreo($correo);
											if($correo==2){
												echo "<br>";
												echo "Error correo invalido";
												$ban=1;
											}
									}else{
										echo "<br>";
										echo "No agregaste correo";
										$ban=1;
									}

									if(isset($_GET['codi'])){
											$codigo=$_GET['codi'];
											$codigo=$this->validarCodigo($codigo);
											if($codigo==2){
												echo "<br>";
												echo "Error codigo invalido";
												$ban=1;
											}
									}else{
										echo "<br>";
										echo "No agregaste codigo";
										$ban=1;
									}
									

									if(isset($_GET['car'])){
											$carrera=$_GET['car'];
											$carrera=$this->validarCarrera($carrera);
											if($carrera==2){
												echo "<br>";
												echo "Error carrera invalida";
												$ban=1;
											}
									}else{
										echo "<br>";
										echo "No agregaste carrera";
										$ban=1;
									}
										
									
									

									if (isset($_GET['url'])) {
										$url=$_GET['url'];
										$url=$this->validarUrl($url);
										if($url==2){
												echo "<br>";
												echo "Error url invalida";
												$ban=1;
											}
									}
									if (isset($_GET['git'])) {
										$gitHub=$_GET['git'];
										$gitHub=$this->validarGithub($gitHub);
										if($carrera==2){
												echo "<br>";
												echo "Error carrera invalida";
												$ban=1;
											}
									}
									if (isset($_GET['cel'])) {
										$cel=$_GET['cel'];
										$cel=$this->validarCelular($cel);
										if($carrera==2){
												echo "<br>";
												echo "Error carrera invalida";
												$ban=1;
											}
										
									}
									if(isset($_GET['equi'])){
										$equipo=$_GET['equi'];
										$equipo=$this->validarEquipo($equipo);
										if($equipo==2){
												echo "<br>";
												echo "Error carrera invalida";
												$ban=1;
											}
									}

									if($ban==0){
										$this->modelo->alta();
									}else{
										echo "<br>";
										echo "Error al insertar";
									}
									
								
								break;
								default:
									echo "Accion no existente";
									break;
						}

				}else
					echo "Accion no valida";

		}
	 }
?>