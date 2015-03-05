<?php
/* @var $this LibroController */
/* @var $data Libro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Isbn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->li_Isbn), array('view', 'id'=>$data->li_Isbn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->li_Titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Editorial')); ?>:</b>
	<?php echo CHtml::encode($data->li_Editorial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Subtitulo')); ?>:</b>
	<?php echo CHtml::encode($data->li_Subtitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Ejemplares')); ?>:</b>
	<?php echo CHtml::encode($data->li_Ejemplares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_Glosa')); ?>:</b>
	<?php echo CHtml::encode($data->li_Glosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_Id')); ?>:</b>
	<?php echo CHtml::encode($data->ca_Id); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('ca_Id')); ?>:</b>
	<?php echo CHtml::encode($alumno); ?>
	<br/>
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('au_Id')); ?>:</b>
	<?php echo CHtml::encode($data->au_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pe_Rut')); ?>:</b>
	<?php echo CHtml::encode($data->pe_Rut); ?>
	<br />
	?>

</div>