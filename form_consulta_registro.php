<?php
	include("sesion.php");
	require('conexion.php');
?>

<!doctype html>



<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Actas unicor </title>
		<link href="css1/media_query.css" rel="stylesheet" type="text/css"/>
		<link href="css1/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="css1/animate.css" rel="stylesheet" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link href="css1/owl.carousel.css" rel="stylesheet" type="text/css"/>
		<link href="css1/owl.theme.default.css" rel="stylesheet" type="text/css"/>
		<link href="css1/style_1.css" rel="stylesheet" type="text/css"/>
		<script src="js1/modernizr-3.5.0.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<link rel="shortcut icon" href="img/autos.ico">
	</head>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="menu_principal.php" class="btn btn-default">Volver al Menú</a>
			</div>	
		</div>
	</div>

	<body>

		<form name='consulta' method='post' action='form_consulta_registro.php'>
			<div align="center">
				<h3>Consulta de Registro</h3>								
				<input type="submit" value="Ver Registro" name="Buscar">			
				<div class="table-responsive">
				<table border="2" class="table">
					<tr><th>Código de Acta</th>
						<th>usuario</th>
						<th>Temas tratados</th>
						<th>Fecha</th>
						<th>Estado</th>
						<th>Participantes</th>
						<th>Responsabilidades</th>
						<th>programa</th>
					</tr>
					<br>
					<br>
				<?php
					error_reporting(E_ERROR);//para que no muestre los WARNING				
					if (isset($_REQUEST['Buscar'])){ 	
						$sql = "SELECT cod_acta, usuario, desc_acta, fecha, estado, participantes, responsabilidades, programa
						FROM acta";
						$resultado=$con->query($sql);					
						$i = 0 ; 
						//echo $sql;
						while ($row = $resultado->fetch_array()){
							echo "<tr>
								<td><input type='hidden' name='cod_acta[$i]' value='".$row[0]."'/>".$row[0]."</td>
								<td><input type='hidden' name='usuario[$i]' value='".$row[1]."'/>".$row[1]."</td>
								<td><input type='hidden' name='desc_actas[$i]' value='".$row[2]."'/>".$row[2]."</td>
								<td><input type='hidden' name='fecha[$i]' value='".$row[3]."'/>".$row[3]."</td>
								<td><input type='hidden' name='estado[$i]' value='".$row[4]."' />".$row[4]."</td>
								<td><input type='hidden' name='participantes[$i]' value='".$row[5]."' />".$row[5]."</td>
								<td><input type='hidden' name='responsabilidades[$i]' value='".$row[6]."' />".$row[6]."</td>
								<td><input type='hidden' name='programa[$i]' value='".$row[7]."' />".$row[7]."</td>
								</tr>";
							$i++; 
						}					
					}	
				?>
				</table>
				</div>
				
			</div>	
		</form>
		<div    class="navbar navbar-default navbar-fixed-bottom ">
				<div class="container">
				<p>
					</p>       
				</div>    
			</div>
		<style type="text/css">
		p
			{
				text-align: center;
			}
		</style>
	</body>

<!-- Llamar a los complementos javascript-->
<script src="librerias/jquery-1.12.4.min.js"></script>
<script src="librerias/FileSaver.min.js"></script>
<script src="librerias/Blob.min.js"></script>
<script src="librerias/xls.core.min.js"></script>
<script src="librerias/dist/js/tableexport.js"></script>
<script>

$("table").tableExport({
formats: ["xlsx","txt", "csv"], //Tipo de archivos a exportar ("xlsx","txt", "csv", "xls")
position: 'button',  // Posicion que se muestran los botones puedes ser: (top, bottom)
bootstrap: false,//Usar lo estilos de css de bootstrap para los botones (true, false)
fileName: "Usuarios",    //Nombre del archivo
});
</script>
</html>