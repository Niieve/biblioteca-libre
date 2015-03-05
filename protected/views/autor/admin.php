<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Agregar nuevo libro',
);

$this->menu=array(
	array('label'=>'Agregar nuevo autor', 'url'=>array('autor/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#autor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Autores</h1>

<?php echo CHtml::link('Buscar','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'autor-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		//'au_Id',
		'au_Nombre',
		'au_ApellidoP',
		'au_ApellidoM',

        array(
        'class'=>'CButtonColumn',
        'header'=> 'Agregar libro',
        'template' => '{view}',
        'buttons' => array(
        'update' => array(
        'label' => 'Agregar libro',
        'visible' => '($model) ? false : true',  //<< el condicional
        ),
        ),
        ),

	    array(
        'class'=>'CButtonColumn',
        'header'=> 'Modificar autor',
        'template' => '{update}',
        'buttons' => array(
        'update' => array(
        'label' => 'Modificar autor',
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
            'label' => 'Eliminar autor',         
        ),
        ),
        ),


	),
)); ?>
