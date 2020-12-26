<?php

class Modelo {

	static public function rutasModelo($rutas) {

		if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" 
			|| $rutas == "editar" || $rutas == "salir") {

			$pagina = "Vistas/modulos/".$rutas.".php";

		}

		else if($rutas == "index") {
			$pagina = "Vistas/modulos/ingreso.php";
		}

		else {
			$pagina = "Vistas/modulos/ingreso.php";
		}

		return $pagina;
	}

}

?>