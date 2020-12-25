<?php 

require_once "conexionBD.php";


class EmpleadosM extends ConexionBD {

	static public function RegistrarEmpleadosM($datosC, $tablaBD) {

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, apellido, email, puesto, salario)
			VALUES (:nombre, :apellido, :email, :puesto, :salario)");

		$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
		$pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
		$pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
		$pdo -> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
		$pdo -> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

		if($pdo -> execute()) {
			return "Bien";
		} else {
			return "Error";
		}

		$pdo->close();

	}
}

?>