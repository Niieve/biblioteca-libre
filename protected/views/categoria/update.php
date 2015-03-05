<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Lista categorías'=>array('admin'),
	'Modificar',
);
?>

<h1>Modificar Categoria "<?php echo $model->ca_Nombre; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>