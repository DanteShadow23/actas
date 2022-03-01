<?php


	include "conexion.php";
		
	
		$sql = "insert into compromisos(cod_acta, desc_compromiso, estado, fecha)
							values (".$_POST["cod_acta"].",
									'".$_POST["desc_compromiso"]."',
									'".$_POST["estado"]."',
									'".$_POST["fecha"]."')";
		$query = $con->query($sql);		
		//echo $sql;
	
		if($query!=null){
			print "<script>alert(\"acta Agregado exitosamente.\");window.location='ver_compromiso.php';</script>";
		}else{
			print "<script>alert(\"No se pudo agregar el acta.\");window.location='ver_compromiso.php';</script>";
		}
	
?>