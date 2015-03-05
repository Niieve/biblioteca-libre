<?php
/* @var $this ExistenciaController */
/* @var $model Existencia */

$this->breadcrumbs=array(
	'Existencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Existencia', 'url'=>array('index')),
	array('label'=>'Manage Existencia', 'url'=>array('admin')),
);
?>

<h1>Create Existencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>