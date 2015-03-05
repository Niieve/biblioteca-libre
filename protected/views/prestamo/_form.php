<?php
/* @var $this PrestamoController */
/* @var $model Prestamo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestamo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_FechaSalida'); ?>
		<?php echo $form->textField($model,'pr_FechaSalida'); ?>
		<?php echo $form->error($model,'pr_FechaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_FechaDevolucion'); ?>
		<?php echo $form->textField($model,'pr_FechaDevolucion'); ?>
		<?php echo $form->error($model,'pr_FechaDevolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_Rut'); ?>
		<?php echo $form->textField($model,'us_Rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'us_Rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_Rut'); ?>
		<?php echo $form->textField($model,'pe_Rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'pe_Rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ex_Id'); ?>
		<?php echo $form->textField($model,'ex_Id'); ?>
		<?php echo $form->error($model,'ex_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->