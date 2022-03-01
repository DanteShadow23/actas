<?php


				
		include "conexion.php";
		
		if ($_POST["clave"] == $_POST["clave_nueva"]){		
			$sql = "insert into usuarios(usuario, nombre, tipo, estado, clave)
										  values ('".$_POST["usuario"]."',
                                          '".$_POST["nombre"]."',
                                          '".$_POST["tipo"]."',
                                          '".$_POST["estado"]."',
                                          '".$_POST["clave"]."')";
			$query = $con->query($sql);		
			//echo $sql;
		
			if($query!=null){
				print "<script>alert(\"Usuario Agregado exitosamente.\");window.location='ver_usuario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar el Usuario.\");window.location='ver_usuario.php';</script>";
			}
		}else{
			print "<script>alert(\"Las claves no coinciden, por favor verifique...!\");window.location='ver_usuario.php';</script>";
		}
?>