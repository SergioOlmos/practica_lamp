<h3>Listado de AFICIONES</h3>
<table>
	<tr>
		<th>Nombre AFICION</th>
	</tr>
	<?php foreach ($aficiones as $aficion):?>
	<tr>
		<td><?=  $aficion->NOMBREAFICION ?></td>
	</tr>
	<?php endforeach;?>	
</table>



