<?php
/* @var $this AutorController */
/* @var $data Autor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('au_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->au_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('au_ApellidoP')); ?>:</b>
	<?php echo CHtml::encode($data->au_ApellidoP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('au_ApellidoM')); ?>:</b>
	<?php echo CHtml::encode($data->au_ApellidoM); ?>
	<br />

</div>