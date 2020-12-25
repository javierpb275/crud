<?php 

class EmpleadosC {

	//Registrar los empleados
	public function RegistrarEmpleadosC() {

		if(isset($_POST["nombreR"])) {

			$datosC =  array("nombre" => $_POST["nombreR"], "apellido" => $_POST["apellidoR"],
							"email" => $_POST["emailR"], "puesto" => $_POST["puestoR"],
							"salario" => $_POST["salarioR"]);

			$tablaBD = "empleados";

			$respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

			if($respuesta == "Bien") {

				header("location:index.php?ruta=empleados");

			} else {

				echo "error";
			}


		}
	}

	//Mostrar empleados
	public function MostrarEmpleadosC() {

		$tablaBD = "empleados";

		$respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

	}
}

?>