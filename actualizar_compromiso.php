<?php
	
	include "conexion.php";

		$sql = "update compromisos set desc_compromiso = '".$_POST["desc_compromiso"]."',  
										estado = '".$_POST["estado"]."',
										fecha = '".$_POST["fecha"]."'


				where consecutivo = ".$_POST["consecutivo"];
		
		$query = $con->query($sql);
		//echo $sql;

		if($query!=null){
			print "<script>alert(\"compromiso Actualizado exitosamente.\");window.location='ver_compromiso.php ?id=".$_POST["consecutivo"]."';</script>";
		}else{
			print "<script>alert(\"No se pudo actualizar el compromiso.\");window.location='ver_compromiso.php?id=".$_POST["consecutivo"]."';</script>";
		}
	

?>