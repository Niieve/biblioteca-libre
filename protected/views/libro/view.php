<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Autores'=>array('libro/admin'),
	'Libro',
);

$this->menu=array(
	array('label'=>'Update Libro', 'url'=>array('update', 'id'=>$model->li_Isbn)),
);
?>

<h1>View Libro #<?php echo $model->li_Isbn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'li_Isbn',
		'li_Titulo',
		'li_Editorial',
		'li_Subtitulo',
		'li_Ejemplares',
		'li_Glosa',
		'ca_Id',
		'au_Id',
		'pe_Rut',
	),
)); ?>
