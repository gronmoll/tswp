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
	<b><?php echo CHtml::link('Zapísať predmet', array('userPredmet/create', 'id'=>$data->id, 'idPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId())); ?></b>
	<?php } ?>
	<?php if($_GET['isPredmetVisible'] != false) { ?>
	<?php
	echo CHtml::link(CHtml::encode('Odhlásiť'), array('userPredmet/delete', 'idPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId()),
	  array(
	    'submit'=>array('userPredmet/delete', 'id'=>$data->id, 'idPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId()),
	    'class' => 'delete','confirm'=>'Are you sure?'
	  )
	);
	?>
	<?php } ?>
	<br />

</div>