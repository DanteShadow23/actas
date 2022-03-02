<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from compromisos where consecutivo = ".$_GET["id"];
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

<form role="form" method="post" action="actualizar_compromiso.php">

    <div class="form-group">
        <label for="lastname">Descripcion de compromisos</label>
        <textarea style="width:550px; height:100px;" placeholder="Ingrese los compromisos del acta" name="desc_compromiso" required value="<?php echo $person->desc_compromiso; ?>" ></textarea> 
    </div>

    <div class="form-group">
        <label for="lastname">Estado</label>
        <SELECT name="estado" class="form-control" id="sel1" required >
            <option value="<?php echo $person->estado;?>"><?php echo $person->estado;?></option>
            <option value='cumplido'>cumplido</option>
            <option value='pendiente'>pendiente</option>						
        </SELECT>
    </div>

    <div class="form-group">
        <label for="lastname">fecha de compromiso</label>
        <input type="date" class="form-control" name="fecha" required value="<?php echo $person->fecha; ?>" />
    </div>
		
	<input type="hidden" name="cod_acta" value="<?php echo $person->cod_acta; ?>">
    <input type="hidden" name="consecutivo" value="<?php echo $_GET["id"]; ?>">
	<button type="submit" class="btn btn-default">Actualizar</button>
    
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>