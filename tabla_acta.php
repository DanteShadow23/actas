<?php
	include "conexion.php";
	
	if ($_SESSION["tipo"] == "Administrador"){
		$sql1= "select * from acta" ;
		$query = $con->query($sql1);
	}else{
		$sql1= "select * from acta where usuario ='".$_SESSION["usuario"]."'" ;
		$query = $con->query($sql1);
	}
?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Código de Acta</th>
	<th>Usuario</th>
	<th>Temas tratados</th>
	<th>Fecha</th>
	<th>Estado</th>
	<th>Participantes</th>
	<th>Responsabilidades</th>
	<th>Programa</th>
	<th>Compromisos</th>
	<th>Edición</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["cod_acta"]; ?></td>
	<td><?php echo $r["usuario"]; ?></td>
	<td><?php echo $r["desc_acta"]; ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php echo $r["participantes"]; ?></td>
	<td><?php echo $r["responsabilidades"]; ?></td>
	<td><?php echo $r["programa"]; ?></td>
	<th><a href="ver_compromiso.php?id=<?php echo $r["cod_acta"];?>" class="btn btn-sm btn-warning">agregar compromisos</a></th>
	<td style="width:150px;">
		<a href="editar_acta.php?id=<?php echo $r["cod_acta"];?>" class="btn btn-sm btn-warning">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
