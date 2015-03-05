<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Rut'); ?>
		<?php echo $form->textField($model,'us_Rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'us_Nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido Paterno'); ?>
		<?php echo $form->textField($model,'us_ApellidoP',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido Materno'); ?>
		<?php echo $form->textField($model,'us_ApellidoM',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->