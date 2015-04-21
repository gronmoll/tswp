<?php
/* @var $this PredmetController */
/* @var $model Predmet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'predmet-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nazov'); ?>
		<?php echo $form->textField($model,'nazov',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nazov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fakulta'); ?>
		<?php echo $form->textField($model,'fakulta',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'fakulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'katedra'); ?>
		<?php echo $form->textField($model,'katedra',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'katedra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Vytvoriť' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->