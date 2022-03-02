
<?php
	include("sesion.php");

?>
<html>
	<head>
		<title>.: Actas Unicor :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<link rel="shortcut icon" href="img/autos.ico">
	</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<a href="menu_principal.php" class="btn btn-default">Volver al Menú </a>

<?php if ($_SESSION["tipo"] == "Administrador"){?>
		<h2>Registro de Acta</h2>

    <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar Acta</a>
	<br><br>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar una nueva acta</h4>
        </div>
        <div class="modal-body">
			<form role="form" method="post" action="agregar_acta.php">
				
        		<div class="form-group">
					<label for="lastname">Participantes de la reunion</label>
					<textarea style="width:550px; height:100px;" placeholder="Ingrese los participantes de la reunion para registro en el acta" name="participantes" required ></textarea> 
				</div>

				<div class="form-group">
					<label for="lastname">Temas tratados</label>
					<textarea style="width:550px; height:100px;" placeholder="Ingrese los temas de la reunion para registro en el acta" name="desc_acta" required ></textarea> 
				</div>

				<div class="form-group">
					<label for="lastname">Responsabilidades</label>
					<textarea style="width:550px; height:100px;" placeholder="Ingrese las responsabilidades de la reunion para registro en el acta" name="responsabilidades" required ></textarea> 
				</div>
        
				<div class="form-group">
					<label for="lastname">programa</label>
					<textarea style="width:550px; height:100px;" placeholder="Ingrese las programa para registro en el acta" name="programa" required ></textarea> 
				</div>

				<button type="submit" class="btn btn-default">Agregar</button>
			</form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php include "tabla_acta.php"; ?>
</div>
</div>
</div>


<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row" align='center'>
		    <div class="col-12 col-md-12 py-4 Reserved">Universidad de Cordoba 2022  </div>       
        </div>
      </div>
    </div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>



