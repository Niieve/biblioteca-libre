<?php
/* @var $this PrestamoController */
/* @var $model Prestamo */

$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	$model->pr_Id=>array('view','id'=>$model->pr_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prestamo', 'url'=>array('index')),
	array('label'=>'Create Prestamo', 'url'=>array('create')),
	array('label'=>'View Prestamo', 'url'=>array('view', 'id'=>$model->pr_Id)),
	array('label'=>'Manage Prestamo', 'url'=>array('admin')),
);
?>

<h1>Update Prestamo <?php echo $model->pr_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>