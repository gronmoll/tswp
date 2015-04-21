<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'meno'); ?>
		<?php echo $form->textField($model,'meno'); ?>
		<?php echo $form->error($model,'meno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priezvisko'); ?>
		<?php echo $form->textField($model,'priezvisko'); ?>
		<?php echo $form->error($model,'priezvisko'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->textField($model,'pass'); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fakulta'); ?>
		<?php echo $form->textField($model,'fakulta'); ?>
		<?php echo $form->error($model,'fakulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'odbor'); ?>
		<?php echo $form->textField($model,'odbor'); ?>
		<?php echo $form->error($model,'odbor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datum_vytvorenia'); ?>
		<?php echo $form->textField($model,'datum_vytvorenia'); ?>
		<?php echo $form->error($model,'datum_vytvorenia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titul'); ?>
		<?php echo $form->textField($model,'titul'); ?>
		<?php echo $form->error($model,'titul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->