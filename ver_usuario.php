
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
	<?php if ($_SESSION["tipo"] == "Administrador"){include "navbar_usuario.php"; } ?>
<div class="container">
<div class="row">
<div class="col-md-12">

<a href="menu_principal.php" class="btn btn-default">Volver al Menú</a>

<?php if ($_SESSION["tipo"] == "Administrador"){?>
		<h2>Registro de Usuarios</h2>

    <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar Usuario</a>
	<br><br>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar nuevo Usuario</h4>
        </div>
        <div class="modal-body">
			<form role="form" method="post" action="agregar_usuario.php">
				
        <div class="form-group">
					<label for="lastname">Usuario</label>
					<input type="text" class="form-control" name="usuario" required  />
				</div>

				<div class="form-group">
					<label for="lastname">Clave</label>
					<input type="password" class="form-control" name="clave" required />
				</div>

				<div class="form-group">
					<label for="lastname">Repita la Clave</label>
					<input type="password" class="form-control" name="clave_nueva" required/>
				</div>

				<div class="form-group">
					<label for="lastname">Nombre Completo</label>
					<input type="text" class="form-control" name="nombre" required />
				</div>
				
				<div class="form-group">
					<label for="lastname">Estado</label>
					<SELECT name="estado" class="form-control" id="sel1" required>
						<option value='Activo'>Activo</option>
						<option value='Inactivo'>Inactivo</option>						
					</SELECT>
				</div>

				<div class="form-group">
					<label for="lastname">Tipo de Usuario</label>
					<SELECT name="tipo" class="form-control" id="sel1" required>
						<option value='Administrador'>Administrador</option>
            			<option value='docente'>Docente</option>
						<option value='funcionario'>Funcionario</option>
						<option value='Invitado'>Invitado</option>						
					</SELECT>
				</div>
        
				<button type="submit" class="btn btn-default">Agregar</button>
			</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php } ?>

<?php include "tabla_usuario.php"; ?>
</div>
</div>
</div>


<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row" align='center'>
		<img src="IMG/logUNICORDOBA.png"  width="680" height="100"> 
		    <div class="col-12 col-md-12 py-4 Reserved">Diseñado por:  Esteban Santamaria V. <br>daniel atencia y luis garcia</div>       
        </div>
      </div>
    </div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>



