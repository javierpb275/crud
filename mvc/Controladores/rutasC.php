<?php

class RutasControlador {

	public function plantilla() {

		include "Vistas/plantilla.php";
	}

	public function rutas() {

		if (isset($_GET["ruta"])) {
			$rutas = $_GET["ruta"];
		} else {
			$rutas = "index";
		}

		$respuesta = Modelo::rutasModelo($rutas);

		include $respuesta;
	}

}

?>