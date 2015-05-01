<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titul'); ?>
		<?php echo $form->textField($model,'titul',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meno'); ?>
		<?php echo $form->textField($model,'meno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'meno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priezvisko'); ?>
		<?php echo $form->textField($model,'priezvisko',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'priezvisko'); ?>
	</div>

	<?php if($model->type == 'admin'){ ?>
		<div class='row'>
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type'); ?>
		</div>
	<?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>45,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fakulta'); ?>
		<?php echo $form->textField($model,'fakulta',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fakulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'odbor'); ?>
		<?php echo $form->textField($model,'odbor',array('size'=>45,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'odbor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Odoslať' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->