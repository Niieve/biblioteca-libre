<?php
/* @var $this LibroController */
/* @var $model Libro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'li_Isbn'); ?>
		<?php echo $form->textField($model,'li_Isbn',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_Titulo'); ?>
		<?php echo $form->textField($model,'li_Titulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_Editorial'); ?>
		<?php echo $form->textField($model,'li_Editorial',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_Subtitulo'); ?>
		<?php echo $form->textField($model,'li_Subtitulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_Ejemplares'); ?>
		<?php echo $form->textField($model,'li_Ejemplares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_Glosa'); ?>
		<?php echo $form->textField($model,'li_Glosa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ca_Id'); ?>
		<?php echo $form->textField($model,'ca_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'au_Id'); ?>
		<?php echo $form->textField($model,'au_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pe_Rut'); ?>
		<?php echo $form->textField($model,'pe_Rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->