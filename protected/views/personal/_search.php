<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pe_Rut'); ?>
		<?php echo $form->textField($model,'pe_Rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_Nombre'); ?>
		<?php echo $form->textField($model,'pe_Nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_ApellidoP'); ?>
		<?php echo $form->textField($model,'pe_ApellidoP',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_ApellidoM'); ?>
		<?php echo $form->textField($model,'pe_ApellidoM',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_Telefono'); ?>
		<?php echo $form->textField($model,'pe_Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_Clave'); ?>
		<?php echo $form->textField($model,'pe_Clave',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_Tipo'); ?>
		<?php echo $form->textField($model,'pe_Tipo',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->