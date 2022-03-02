<?php
	include "conexion.php";
	
		$sql1= "select * from compromisos where cod_acta ='".$_SESSION["cod_acta"]."'" ;
		$query = $con->query($sql1);

?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Consecutivo</th>
	<th>Código de Acta</th>
	<th>Descripcion de compromisos</th>
    <th>Estado</th>
	<th>Fecha</th>

	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["consecutivo"]; ?></td>
	<td><?php echo $r["cod_acta"]; ?></td>
	<td><?php echo $r["desc_compromiso"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
    <td><?php echo $r["fecha"]; ?></td>

	<td style="width:150px;">
		<a href="editar_compromiso.php?id=<?php echo $r["consecutivo"];?>" class="btn btn-sm btn-warning">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
