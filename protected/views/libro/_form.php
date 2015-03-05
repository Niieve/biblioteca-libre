<?php
/* @var $this LibroController */
/* @var $model Libro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'libro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<table width="100%" border="0">
    <tr valign="top">
	<td>
		<?php echo $form->labelEx($model,'li_Isbn'); ?>
		<?php echo $form->textField($model,'li_Isbn',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'li_Isbn'); ?>
	</td>
	<td>
        <?php echo $form->labelEx($model,'li_Editorial'); ?>
		<?php echo $form->textField($model,'li_Editorial',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'li_Editorial'); ?>
	</td>
	<td>
		<?php echo $form->labelEx($model,'ca_Id'); ?>
		<?php echo $form->dropDownList($model,'ca_Id',
		CHtml::listData(Categoria::model()->findAll(),'ca_Id','ca_Nombre')
		); ?>
		<?php echo $form->error($model,'ca_Id'); ?>
	</td>
    </tr>
    </table>
	<div class="row">
		<?php echo $form->labelEx($model,'li_Titulo'); ?>
		<?php echo $form->textField($model,'li_Titulo',array('style'=>'width:97%','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'li_Titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_Subtitulo'); ?>
		<?php echo $form->textField($model,'li_Subtitulo',array('style'=>'width:97%','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'li_Subtitulo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'li_Glosa'); ?>
		<?php echo $form->textField($model,'li_Glosa',array('style'=>'width:97%','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'li_Glosa'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->