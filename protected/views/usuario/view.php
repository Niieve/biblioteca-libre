<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->us_Rut,
);

$this->menu=array(
	array('label'=>'Lista de Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuarios', 'url'=>array('update', 'id'=>$model->us_Rut)),
	array('label'=>'Eliminar Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->us_Rut),'confirm'=>'Está seguro que desea eliminar a un Usuario?')),
	array('label'=>'Buscar Usuario', 'url'=>array('admin')),
);
?>

<h1>Ver Usuarios #<?php echo $model->us_Rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'us_Rut',
		'us_Nombre',
		'us_ApellidoP',
		'us_ApellidoM',
		'us_Direccion',
		'us_Telefono',
	),
)); ?>
