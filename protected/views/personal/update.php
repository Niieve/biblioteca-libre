<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->pe_Rut=>array('view','id'=>$model->pe_Rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'View Personal', 'url'=>array('view', 'id'=>$model->pe_Rut)),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>Update Personal <?php echo $model->pe_Rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>