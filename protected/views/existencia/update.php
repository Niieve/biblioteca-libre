<?php
/* @var $this ExistenciaController */
/* @var $model Existencia */

$this->breadcrumbs=array(
	'Existencias'=>array('index'),
	$model->ex_Id=>array('view','id'=>$model->ex_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Existencia', 'url'=>array('index')),
	array('label'=>'Create Existencia', 'url'=>array('create')),
	array('label'=>'View Existencia', 'url'=>array('view', 'id'=>$model->ex_Id)),
	array('label'=>'Manage Existencia', 'url'=>array('admin')),
);
?>

<h1>Update Existencia <?php echo $model->ex_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>