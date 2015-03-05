<?php
/* @var $this CategoriaController */
/* @var $data Categoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ca_Id), array('view', 'id'=>$data->ca_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ca_Nombre); ?>
	<br />


</div>