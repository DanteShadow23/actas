<?php

	
	include "conexion.php";

		$sql = "update acta set desc_acta = '".$_POST["desc_acta"]."',  
								estado = '".$_POST["estado"]."',
								participantes = '".$_POST["participantes"]."',
								responsabilidades = '".$_POST["responsabilidades"]."',
								programa = '".$_POST["programa"]."'


				where cod_acta = ".$_POST["cod_acta"];
		
		$query = $con->query($sql);
		
		if($query!=null){
			print "<script>alert(\"acta Actualizado exitosamente.\");window.location='ver_acta.php';</script>";
		}else{
			print "<script>alert(\"No se pudo actualizar el acta.\");window.location='ver_acta.php';</script>";
		}
	



?>