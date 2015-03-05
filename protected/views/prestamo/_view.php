<?php
/* @var $this PrestamoController */
/* @var $data Prestamo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pr_Id), array('view', 'id'=>$data->pr_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_FechaSalida')); ?>:</b>
	<?php echo CHtml::encode($data->pr_FechaSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_FechaDevolucion')); ?>:</b>
	<?php echo CHtml::encode($data->pr_FechaDevolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_Rut')); ?>:</b>
	<?php echo CHtml::encode($data->us_Rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Rut')); ?>:</b>
	<?php echo CHtml::encode($data->pe_Rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ex_Id')); ?>:</b>
	<?php echo CHtml::encode($data->ex_Id); ?>
	<br />


</div>