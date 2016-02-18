<h3>Listado de PERSONAS</h3>
<table>
	<tr>
		<th>Nombre PERSONA</th>
		<th>Núm.afic.</th>
	</tr>
	<?php foreach ($personas as $persona):?>
	<tr>
		<td><?=  $persona->NOMBREPERSONA ?></td>
	</tr>
	<?php endforeach;?>

</table>
