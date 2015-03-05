<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros',
);

$this->menu=array(
	array('label'=>'Agregar nuevo libro', 'url'=>array('autor/admin')),
	array('label'=>'Agregar nueva categoria', 'url'=>array('categoria/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#libro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Libros</h1>

<?php echo CHtml::link('Buscar','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'libro-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'li_Isbn',
		'li_Titulo',
		'au_Id',
		'li_Editorial',
		'li_Subtitulo',
		'li_Glosa',
		/*
		'ca_Id',
		'au_Id',
		'pe_Rut',
		*/
		 array(
        'class'=>'CButtonColumn',
        'header'=> 'Agregar ejemplar',
        'template' => '{view}',
        'buttons' => array(
        'update' => array(
        'label' => 'Agregar ejemplar',
        'visible' => '($model) ? false : true',  //<< el condicional
        ),
        ),
        ),

	    array(
        'class'=>'CButtonColumn',
        'header'=> 'Modificar',
        'template' => '{update}',
        'buttons' => array(
        'update' => array(
        'label' => 'Modificar',
        'visible' => '($model) ? false : true',  //<< el condicional
        ),
        ),
        ),

      	 array( 
        'class'=>'CButtonColumn',
        'header'=> 'Eliminar',
        'template' => '{delete}',
        'deleteConfirmation'=>"¿Está seguro que desea eliminar este autor?",      
        'buttons' => array(          
        'delete' => array(
            'label' => 'Eliminar libro',         
        ),
        ),
        ),

	),
)); ?>
