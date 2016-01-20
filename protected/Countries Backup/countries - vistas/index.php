<h1>Countries</h1>
<?php echo CHtml::link("Crear",array("create"));?> |
<!-- link en el index  -->
<?php echo CHtml::link("Excel",array("index","excel"=>1),array("class"=>"btn"));?>

<?php foreach ($countries as $data):?>
<!-- array de modelos, en cada interacion que le haga a $countries voy a tener una instancia de mi modelo -->
<h3><?php echo $data->name?>
	<a
		href="<?php echo $this->createUrl("enabled",array("id"=>$data->id));?>">
		<!-- Cuando creamos etiquetas <a es indispensable crealas con el metodo createUrl si no lo hacemos con el CHtml::link, recibe dos parametros, el 1ro la ruta donde va a ir y luego el 2do un array clave valor con los parametros   -->
		<span
		class="label label-<?php echo $data->status==1?"info":"warning";?>"> <!-- clase dinamina de bootstrap igual que en la vista y cambiamos por $data porque se lo haces al foreach  --> 
			<?php echo $data->status==1?"Enabled":"Disabled";?> 
		</span>
	</a>
</h3>
<!-- imprimos en pantalla de esta forma, accedo al nombre de ese registro y luego accedo al status en donde si es igual a 1 que ponga enabled sino disabled-->

<label class="badge badge-info"><?php echo $data->id;?></label>
<?php echo CHtml::link("Actualizar",array("update","id"=>$data->id));?> |
<!-- creamos el link a la vista UPDATE, la accion es update, enviamos parametro id, que va a tener el registro del cual se esta haciendo la iteracion -->
<?php echo CHtml::link("Borrar",array("delete","id"=>$data->id),array("confirm"=>"Esta seguro que desea borrar?"));?> |

<?php echo CHtml::link("Ver",array("view","id"=>$data->id));?>
<!-- creo el link ver y lo mando a la accion view, y el parametro =>$data->id para que sepa de que me va a mostrar el detalle -->
<hr>

<?php endforeach;?>