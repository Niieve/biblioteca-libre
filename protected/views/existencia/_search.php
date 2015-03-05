<?php
/* @var $this ExistenciaController */
/* @var $model Existencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ex_Id'); ?>
		<?php echo $form->textField($model,'ex_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ex_Estado'); ?>
		<?php echo $form->textField($model,'ex_Estado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_Isbn'); ?>
		<?php echo $form->textField($model,'li_Isbn',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->