<?php

	session_start(); //inicio una sesion
								
	$clave  = $_POST["clave"]; //se captura la clave
	$estado = "Activo";
        
    require('conexion.php');
	
	$query = "select * from usuarios where clave ='".$clave."' 
                                    and estado = '".$estado."'
									and usuario = '".$_SESSION["usuario"]."'";	
	
	$resultado=$con->query($query);
		
	$filas = $resultado->num_rows;
	if ($filas<=0){
		echo '<script language = javascript>
		alert("Error en la Clave, por favor verifique....!")
		self.location = "login-pass.php"
		</script>';
	}else{
		$fila = $resultado->fetch_assoc();
		
		$_SESSION["autentificado"] = true;
		
	    echo "<script type='text/javascript'> window.location='menu_principal.php'; </script>";
	
	}	
	
?>
