
<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->us_Rut), array('view', 'id'=>$data->us_Rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->us_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_ApellidoP')); ?>:</b>
	<?php echo CHtml::encode($data->us_ApellidoP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_ApellidoM')); ?>:</b>
	<?php echo CHtml::encode($data->us_ApellidoM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->us_Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->us_Telefono); ?>
	<br />


</div>