<?php
/* @var $this ExistenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Existencias',
);

$this->menu=array(
	array('label'=>'Create Existencia', 'url'=>array('create')),
	array('label'=>'Manage Existencia', 'url'=>array('admin')),
);
?>

<h1>Existencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
