<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from usuarios where usuario = '".$_GET["id"]."'";
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
	}
}

?>

<?php if($person!=null):?>

<form role="form" method="post" action="actualizar_usuario.php">

	<div class="form-group">
		<label for="lastname">Usuario</label>
		<input type="text" class="form-control" name="usuario" required  disabled value="<?php echo $person->usuario; ?>"/>
	</div>

	<div class="form-group">
		<label for="lastname">Clave</label>
		<input type="password" class="form-control" name="clave" required value="<?php echo $person->clave; ?>"/>
	</div>

	<div class="form-group">
		<label for="lastname">Repita la Clave</label>
		<input type="password" class="form-control" name="clave_nueva" required/>
	</div>

	<div class="form-group">
		<label for="lastname">Nombre</label>
		<input type="text" class="form-control" name="nombre" required value="<?php echo $person->nombre; ?>"/>
	</div>

	<div class="form-group">
		<label for="lastname">Estado</label>
			<SELECT name="estado" class="form-control" id="sel1" required>
				<option value="<?php echo $person->estado;?>"><?php echo $person->estado;?></option>
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
		
	<input type="hidden" name="usuario" value="<?php echo $person->usuario; ?>">
	<button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>