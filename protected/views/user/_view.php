<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('titul')); ?>:</b>
	<?php echo CHtml::encode($data->titul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meno')); ?>:</b>
	<?php echo CHtml::encode($data->meno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priezvisko')); ?>:</b>
	<?php echo CHtml::encode($data->priezvisko); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fakulta')); ?>:</b>
	<?php echo CHtml::encode($data->fakulta); ?>
	<br />
 
	<b><?php echo CHtml::encode($data->getAttributeLabel('odbor')); ?>:</b>
	<?php echo CHtml::encode($data->odbor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datum_vytvorenia')); ?>:</b>
	<?php echo CHtml::encode($data->datum_vytvorenia); ?>
	<br />


</div>