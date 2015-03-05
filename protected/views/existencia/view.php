<?php
/* @var $this ExistenciaController */
/* @var $model Existencia */

$this->breadcrumbs=array(
	'Existencias'=>array('index'),
	$model->ex_Id,
);

$this->menu=array(
	array('label'=>'List Existencia', 'url'=>array('index')),
	array('label'=>'Create Existencia', 'url'=>array('create')),
	array('label'=>'Update Existencia', 'url'=>array('update', 'id'=>$model->ex_Id)),
	array('label'=>'Delete Existencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ex_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Existencia', 'url'=>array('admin')),
);
?>

<h1>View Existencia #<?php echo $model->ex_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ex_Id',
		'ex_Estado',
		'li_Isbn',
	),
)); ?>
