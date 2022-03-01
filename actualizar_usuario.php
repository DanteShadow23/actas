<?php

	
	include "conexion.php";
	if ($_POST["clave"] == $_POST["clave_nueva"]){	
		$sql = "update usuarios set clave = '".$_POST["clave"]."',  
									nombre = '".$_POST["nombre"]."',   
									estado = '".$_POST["estado"]."',
									tipo = '".$_POST["tipo"]."'
				where usuario = '".$_POST["usuario"]."'";
		
		$query = $con->query($sql);
		//echo $sql;
		if($query!=null){
			print "<script>alert(\"Usuario Actualizado exitosamente.\");window.location='ver_usuario.php';</script>";
		}else{
			print "<script>alert(\"No se pudo actualizar el Usuario.\");window.location='ver_usuario.php';</script>";
		}
		}else{
		print "<script>alert(\"Las claves no coinciden, por favor verifique...!\");window.location='ver_usuario.php';</script>";
	 }




?>