<?php
/* @var $this UserRozvrhController */
/* @var $data UserRozvrh */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_termin_predmet')); ?>:</b>
	<?php echo CHtml::encode($data->id_termin_predmet); ?>
	<br />


</div>