<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'titul'); ?>
		<?php echo $form->textField($model,'titul',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meno'); ?>
		<?php echo $form->textField($model,'meno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priezvisko'); ?>
		<?php echo $form->textField($model,'priezvisko',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fakulta'); ?>
		<?php echo $form->textField($model,'fakulta',array('size'=>45,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'odbor'); ?>
		<?php echo $form->textField($model,'odbor',array('size'=>45,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datum_vytvorenia'); ?>
		<?php echo $form->textField($model,'datum_vytvorenia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->