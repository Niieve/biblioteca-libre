<?php
/* @var $this ExistenciaController */
/* @var $data Existencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ex_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ex_Id), array('view', 'id'=>$data->ex_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ex_Estado')); ?>:</b>
	<?php echo CHtml::encode($data->ex_Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Isbn')); ?>:</b>
	<?php echo CHtml::encode($data->li_Isbn); ?>
	<br />


</div>