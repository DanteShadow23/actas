<?php

include "conexion.php";

error_reporting(E_ALL ^ E_NOTICE);

$sql1= "select * from usuarios where usuario like '%$_GET[s]%' or nombre like '%$_GET[s]%' 
                                        	or estado like '%$_GET[s]%' 
										    or tipo = '$_GET[s]%'";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Código</th>
	<th>Nombre</th>
	<th>Tipo de usuario</th>
	<th>Estado</th>
	<th>Clave</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["usuario"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["tipo"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php echo $r["clave"]; ?></td>

	<td style="width:150px;">
		<a href="editar_usuario.php?id=<?php echo $r["usuario"];?>" class="btn btn-sm btn-warning">Editar</a>
		
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
