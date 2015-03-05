<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Autores'=>array('autor/admin'),
	'Modificar autor',
);
?>
<h1>Modificar autor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>