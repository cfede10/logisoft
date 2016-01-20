<h1>View detail of Country</h1>
<table class="table">
	<tr>
		<td><strong>ID</strong></td>
		<td><?php echo $model->id?></td>
		<!-- accedor al model id para visualizar el id -->
	</tr>
	<tr>
		<td><strong>Nombre</strong></td>
		<!-- label -->
		<td><?php echo $model->name?></td>
		<!-- accedor al model name para visualizar el nombre -->
	</tr>
	<tr>
		<td><strong>Status</strong></td>
		<td><span
			class="label label-<?php echo $model->status==1?"info":"warning";?>">
				<!-- uso una clase dinamica de bootstrat de twiter para que lo ponga con colores y mas lindo-->
			<?php echo $model->status==1?"Enable":"Disable";?></span> <!-- si status==1 muestra "Enable" sino muestra "Disable"  -->
		</td>

	</tr>
</table>