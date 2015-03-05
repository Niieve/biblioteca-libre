<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar nuevo Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Usuarios</h1>

<?php echo CHtml::link('Buscar usuario','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'us_Rut',
		'us_Nombre',
		'us_ApellidoP',
		'us_ApellidoM',
		//'us_Direccion',
		//'us_Telefono',
		 array(
        'class'=>'CButtonColumn',
        'header'=> 'Ver usuario',
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
        'deleteConfirmation'=>"¿Está seguro que desea eliminar este usuario?",      
        'buttons' => array(          
        'delete' => array(
            'label' => 'Eliminar usuario',         
        ),
        ),
        ),

	),
)); ?>
