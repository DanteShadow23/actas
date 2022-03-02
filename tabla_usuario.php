<?php
	include "conexion.php";
	
	if ($_SESSION["tipo"] == "Administrador"){
		$sql1= "select * from usuarios" ;
		$query = $con->query($sql1);
	}else{
		$sql1= "select * from usuarios where usuario ='".$_SESSION["usuario"]."'" ;
		$query = $con->query($sql1);
	}
?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Usuario</th>
	<th>Nombres completo</th>
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
