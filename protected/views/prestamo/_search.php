<?php
/* @var $this PrestamoController */
/* @var $model Prestamo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pr_Id'); ?>
		<?php echo $form->textField($model,'pr_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_FechaSalida'); ?>
		<?php echo $form->textField($model,'pr_FechaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_FechaDevolucion'); ?>
		<?php echo $form->textField($model,'pr_FechaDevolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_Rut'); ?>
		<?php echo $form->textField($model,'us_Rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_Rut'); ?>
		<?php echo $form->textField($model,'pe_Rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ex_Id'); ?>
		<?php echo $form->textField($model,'ex_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->