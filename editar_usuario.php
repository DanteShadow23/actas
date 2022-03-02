<?php
	include("sesion.php");
	 
?>
<html>
	<head>
		<title>.: Actas Unicor :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>	
		
	<?php if ($_SESSION["usuario"] == "Administrador"){ include "navbar_usuario.php"; } ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<a href="menu_principal.php" class="btn btn-default">Volver al Menú</a>
		<h2>Editar Usuario</h2>

<?php include "formulario_usuario.php";?>

</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>