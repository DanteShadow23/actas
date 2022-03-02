<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from acta where cod_acta = '".$_GET["id"]."'";
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

<form role="form" method="post" action="actualizar_acta.php">

	<div class="form-group">
		<label for="lastname">Participantes de la reunion</label>
		<textarea style="width:550px; height:100px;" placeholder="Ingrese los participantes de la reunion para registro en el acta" name="participantes" required value="<?php echo $person->participantes; ?>" ></textarea> 
	</div>

	<div class="form-group">
		<label for="lastname">Temas tratado</label>
		<textarea style="width:600px; height:100px;" placeholder="Ingrese los temas de la reunion para registro en el acta" name="desc_acta" required value="<?php echo $person->desc_acta; ?>" ></textarea> 
	</div>

	<div class="form-group">
		<label for="lastname">Responsabilidades</label>
		<textarea style="width:550px; height:100px;" placeholder="Ingrese las responsabilidades de la reunion para registro en el acta" name="responsabilidades" required value="<?php echo $person->responsabilidades; ?>" ></textarea> 
	</div>

	<div class="form-group">
		<label for="lastname">programa</label>
		<textarea style="width:550px; height:100px;" placeholder="Ingrese el programa para registro en el acta" name="programa" required value="<?php echo $person->programa; ?>" ></textarea> 
	</div>

	<div class="form-group">
		<label for="lastname">Estado</label>
			<SELECT name="estado" class="form-control" id="sel1" required>
				<option value="<?php echo $person->estado;?>"><?php echo $person->estado;?></option>
				<option value='Activo'>Activo</option>
				<option value='Inactivo'>Inactivo</option>						
			</SELECT>
	</div>

		
	<input type="hidden" name="cod_acta" value="<?php echo $person->cod_acta; ?>">
	<button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>