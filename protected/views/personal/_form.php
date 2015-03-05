<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_Rut'); ?>
		<?php echo $form->textField($model,'pe_Rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'pe_Rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_Nombre'); ?>
		<?php echo $form->textField($model,'pe_Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pe_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_ApellidoP'); ?>
		<?php echo $form->textField($model,'pe_ApellidoP',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pe_ApellidoP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_ApellidoM'); ?>
		<?php echo $form->textField($model,'pe_ApellidoM',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pe_ApellidoM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_Telefono'); ?>
		<?php echo $form->textField($model,'pe_Telefono'); ?>
		<?php echo $form->error($model,'pe_Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_Clave'); ?>
		<?php echo $form->textField($model,'pe_Clave',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pe_Clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pe_Tipo'); ?>
		<?php echo $form->textField($model,'pe_Tipo',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'pe_Tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->