<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Libros'=>array('libro/admin'),
	'Lista de categorías',
);

$this->menu=array(
	array('label'=>'Agregar nueva categoría', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#categoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Categorías</h1>

<?php echo CHtml::link('Buscar categoría','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'categoria-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'ca_Id',
		'ca_Nombre',
			 array( 
	 	  
       'class'=>'CButtonColumn',
       'header'=> 'Modificar',
        'template' => '{update}',
        'buttons' => array(
        'update' => array(
            'label' => 'Modificar Respuesta',           
       // 'visible' => '($data->respuesta  ) ? true : false',  //<< el condicional
        ),
        ),
        ),

      



      	 array( 
	 	  
       'class'=>'CButtonColumn',
       'header'=> 'Eliminar',
        'template' => '{delete}',
        'deleteConfirmation'=>"¿Está seguro que desea eliminar esta categoría?",      
        'buttons' => array(          
        'delete' => array(
            'label' => 'Eliminar Respuesta', 
                        
        ),
        ),
        ),
	),
)); ?>
