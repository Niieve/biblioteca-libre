<?php
/* @var $this PrestamoController */
/* @var $model Prestamo */

$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	$model->pr_Id,
);

$this->menu=array(
	array('label'=>'List Prestamo', 'url'=>array('index')),
	array('label'=>'Create Prestamo', 'url'=>array('create')),
	array('label'=>'Update Prestamo', 'url'=>array('update', 'id'=>$model->pr_Id)),
	array('label'=>'Delete Prestamo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pr_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prestamo', 'url'=>array('admin')),
);
?>

<h1>View Prestamo #<?php echo $model->pr_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pr_Id',
		'pr_FechaSalida',
		'pr_FechaDevolucion',
		'us_Rut',
		'pe_Rut',
		'ex_Id',
	),
)); ?>
