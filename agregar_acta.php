<?php

	include("sesion.php");
				
	include "conexion.php";
		
	$fecha_sistema = date('Y-m-d');
	$estado  = "Activa";
		
			$sql = "insert into acta(usuario, desc_acta, fecha, estado, participantes, responsabilidades, programa)
								values ('".$_SESSION["usuario"]."',
                                        '".$_POST["desc_acta"]."',
                                        '".$fecha_sistema."',
										'".$estado."',
                                        '".$_POST["participantes"]."',
										'".$_POST["responsabilidades"]."',
                                        '".$_POST["programa"]."')";
			$query = $con->query($sql);		
			echo $sql;
		
			if($query!=null){
				print "<script>alert(\"acta Agregado exitosamente.\");window.location='ver_acta.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar el acta.\");window.location='ver_acta.php';</script>";
			}
		
?>