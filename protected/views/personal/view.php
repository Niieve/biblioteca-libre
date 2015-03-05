<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->pe_Rut,
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Update Personal', 'url'=>array('update', 'id'=>$model->pe_Rut)),
	array('label'=>'Delete Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pe_Rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>View Personal #<?php echo $model->pe_Rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pe_Rut',
		'pe_Nombre',
		'pe_ApellidoP',
		'pe_ApellidoM',
		'pe_Telefono',
		'pe_Clave',
		'pe_Tipo',
	),
)); ?>
