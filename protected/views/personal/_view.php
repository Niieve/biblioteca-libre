<?php
/* @var $this PersonalController */
/* @var $data Personal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pe_Rut), array('view', 'id'=>$data->pe_Rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->pe_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_ApellidoP')); ?>:</b>
	<?php echo CHtml::encode($data->pe_ApellidoP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_ApellidoM')); ?>:</b>
	<?php echo CHtml::encode($data->pe_ApellidoM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->pe_Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Clave')); ?>:</b>
	<?php echo CHtml::encode($data->pe_Clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->pe_Tipo); ?>
	<br />


</div>