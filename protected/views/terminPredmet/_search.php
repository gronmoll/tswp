<?php
/* @var $this TerminPredmetController */
/* @var $model TerminPredmet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'miestnost'); ?>
		<?php echo $form->textField($model,'miestnost',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vyucujuci'); ?>
		<?php echo $form->textField($model,'vyucujuci',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den'); ?>
		<?php echo $form->textField($model,'den',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cas'); ?>
		<?php echo $form->textField($model,'cas',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kapacita'); ?>
		<?php echo $form->textField($model,'kapacita',array('size'=>10,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_predmet'); ?>
		<?php echo $form->textField($model,'id_predmet',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->