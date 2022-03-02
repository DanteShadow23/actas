<?php
		
	session_start(); 
	
	require('conexion.php');
	
	$usuario = $_POST["usuario"];
	$estado = "Activo";
	

	$query = "select * from usuarios where usuario='".$usuario."' and estado = '".$estado."'";
	$resultado=$con->query($query);
	$fila = $resultado -> num_rows;
	echo $query;
	
	if ($fila<=0){

		echo '<script language = javascript>
		alert("Error en el Usuario, por favor verifique....!")
		self.location = "login-user.php"
		</script>';
	}			
	else
	{
		$fila = $resultado->fetch_assoc();
		$_SESSION["usuario"]   = $fila["usuario"];
		$_SESSION["nombre"]   = $fila["nombre"];
		$_SESSION["tipo"]     = $fila["tipo"];
		
		echo "<script type='text/javascript'> window.location='login-pass.php'; </script>";                        
		}
					 	
	
?>
