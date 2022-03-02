
<?php
	include("sesion.php");
    $cod_acta = $_GET["id"];
	$_SESSION["cod_acta"] = $cod_acta;
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

<a href="ver_acta.php" class="btn btn-default">Volver</a>

<?php if ($_SESSION["tipo"] == "Administrador"){?>
		<h2>Registro de compromisos</h2>

    <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar compromiso</a>
	<br><br>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar una nueva compromiso</h4>
        </div>
        <div class="modal-body">
			<form role="form" method="post" action="agregar_compromiso.php">
				
        		<div class="form-group">
					<label for="lastname">Descripcion de compromisos</label>
					<textarea style="width:550px; height:100px;" placeholder="Ingrese los compromisos del acta" name="desc_compromiso" required ></textarea> 
				</div>

			<div class="form-group">
		        <label for="lastname">Estado</label>
			<SELECT name="estado" class="form-control" id="sel1" required>
				<option value='cumplido'>cumplido</option>
				<option value='pendiente'>pendiente</option>						
			</SELECT>
	        </div>

				<div class="form-group">
					<label for="lastname">fecha de compromiso</label>
                    <input type="date" class="form-control" name="fecha" required />
				</div>
        
                <input type="hidden" name="cod_acta" value="<?php echo $cod_acta; ?>">

				<button type="submit" class="btn btn-default">Agregar</button>
			</form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php include "tabla_compromiso.php"; ?>
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



