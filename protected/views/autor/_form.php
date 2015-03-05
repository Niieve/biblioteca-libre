<?php
/* @var $this AutorController */
/* @var $model Autor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'autor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

    <table width="100%" border="0">
    <tr valign="top">
	<td>
		<?php echo $form->labelEx($model,'au_Nombre'); ?>
		<?php echo $form->textField($model,'au_Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'au_Nombre'); ?>
	</td>
	<td>
        <?php echo $form->labelEx($model,'au_ApellidoP'); ?>
		<?php echo $form->textField($model,'au_ApellidoP',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'au_ApellidoP'); ?>
	</td>
	<td>
		<?php echo $form->labelEx($model,'au_ApellidoM'); ?>
		<?php echo $form->textField($model,'au_ApellidoM',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'au_ApellidoM'); ?>
	</td>
    </tr>
    </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->