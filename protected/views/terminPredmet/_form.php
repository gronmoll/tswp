<?php
/* @var $this TerminPredmetController */
/* @var $model TerminPredmet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'termin-predmet-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'miestnost'); ?>
		<?php echo $form->dropDownList($model,'miestnost', array('PK6-PC1'=>'PK6-PC1', 'L9B-515'=>'L9B-515', 'PK6-PC6'=>'PK6-PC6')); ?>
		<?php echo $form->error($model,'miestnost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vyucujuci'); ?>
		<?php echo $form->textField($model,'vyucujuci',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'vyucujuci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den'); ?>
		<?php echo $form->dropDownList($model,'den', array('pondelok'=>'Pondelok', 'utorok'=>'Utorok', 'streda'=>'Streda', 'stvrtok'=>'Štvrtok', 'piatok'=>'Piatok')); ?>
		<?php echo $form->error($model,'den'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cas'); ?>
		<?php echo $form->dropDownList($model,'cas', array('7:30 - 9:00'=>'7:30 - 9:00', '9:10 - 10:40'=>'9:10 - 10:40', '10:50 - 12:20'=>'10:50 - 12:20')); ?>
		<?php echo $form->error($model,'cas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kapacita'); ?>
		<?php echo $form->textField($model,'kapacita',array('size'=>10,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'kapacita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_predmet'); ?>
		<?php echo $form->dropDownList($model,'id_predmet', CHtml::listData(Predmet::model()->findAll(), 'id', 'nazov')); ?>
		<?php echo $form->error($model,'id_predmet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->