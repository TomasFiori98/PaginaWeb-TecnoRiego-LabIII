<?php

function check_login($con){

	if(isset($_SESSION['usuario'])){

		$nombre = $_SESSION['usuario'];
		$query = "SELECT * FROM usuarios WHERE nombre = '$nombre' LIMIT 1";
		$resultado = mysqli_query($con , $query);

		if($resultado && mysqli_num_rows($resultado) > 0){
			$user_data = mysqli_fetch_assoc($resultado);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die();

}

?>