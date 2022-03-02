<?php
//este codigo se invoca al inicio de todos los formularios para autentificarlos 20 minuto maximo para una
	session_start();//inicio una sesion
	if (!$_SESSION["autentificado"]) {
		header("Location:cerrar.php");
	}
?>