<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->us_Rut=>array('view','id'=>$model->us_Rut),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->us_Rut)),
	array('label'=>'Buscar Usuario', 'url'=>array('admin')),
);
?>

<h1>Modificar Usuario <?php echo $model->us_Rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>