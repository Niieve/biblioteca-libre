<?php
/* @var $this AutorController */
/* @var $model Autor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'au_Nombre'); ?>
		<?php echo $form->textField($model,'au_Nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'au_ApellidoP'); ?>
		<?php echo $form->textField($model,'au_ApellidoP',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'au_ApellidoM'); ?>
		<?php echo $form->textField($model,'au_ApellidoM',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->