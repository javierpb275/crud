<?php 

class AdminC {

	public function IngresoC() {

		if(isset($_POST["usuarioI"])) {
			$datosC = array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);

			$tablaBD = "administradores";

			$respuesta = AdminM::IngresoM($datosC, $tablaBD);
			
		}


	}
}

?>