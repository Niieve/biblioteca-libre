<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">



	<?php $form=$this->beginWidget('CActiveForm', array(
	 'id'=>'usuario-form', //Esto solo lo utilizo en este ejemplo
 	'enableAjaxValidation'=>false, //Para habilitar validación AJAX (lado del servidor en tiempo real) poner en true, false significa deshabilitado
 
/*Atención:
 
Para habilitar la validación AJAX no basta con cambiar el false con true, también se debe hacer unas modificaciones en el controlador (Controllers/Productos.php):
 
Se debe descomentar la siguiente linea: // $this->performAjaxValidation($model); en las acciones Crear (actionCreate) y Actualizar (actionUpdate).
 
*/
 	'enableClientValidation'=>true, //Para habilitar la validación del lado del cliente poner en true, false significa deshabilitado
 	'clientOptions'=>array(
 	'validateOnSubmit'=>true,   //Para habilitar la validación del lado del servidor poner en true, false significa deshabilitado
 )
)); ?>


	<p class="note">Datos marcados con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'us_Rut'); ?>
		<?php echo $form->textField($model,'us_Rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'us_Rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_Nombre'); ?>
		<?php echo $form->textField($model,'us_Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'us_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_ApellidoP'); ?>
		<?php echo $form->textField($model,'us_ApellidoP',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'us_ApellidoP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_ApellidoM'); ?>
		<?php echo $form->textField($model,'us_ApellidoM',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'us_ApellidoM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_Direccion'); ?>
		<?php echo $form->textField($model,'us_Direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'us_Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_Telefono'); ?>
		<?php echo $form->textField($model,'us_Telefono'); ?>
		<?php echo $form->error($model,'us_Telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
