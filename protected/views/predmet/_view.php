<?php
/* @var $this PredmetController */
/* @var $data Predmet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazov')); ?>:</b>
	<?php echo CHtml::encode($data->nazov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fakulta')); ?>:</b>
	<?php echo CHtml::encode($data->fakulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('katedra')); ?>:</b>
	<?php echo CHtml::encode($data->katedra); ?>
	<br />
	<?php if($_GET['isVisible'] != false) { ?>
	<b><?php echo CHtml::link('Zapísať predmet', array('userPredmet/create','idPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId())); ?></b>
	<?php } ?>
	<br />

</div>