<?php
/* @var $this TerminPredmetController */
/* @var $data TerminPredmet */
?>

<div class="view">

	<?php
		//$count= Yii::app()->db->createCommand('SELECT count(*) from user_rozvrh ur where ur.id_termin_predmet =' .$model->id_termin_predmet)->queryScalar();
		$id_pred = CHtml::encode($data->id_predmet);
		$predmet_name = Yii::app()->db->createCommand('SELECT p.nazov FROM predmet p WHERE p.id ='.$id_pred)->queryScalar();
	?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_predmet')); ?>:</b>
	<?php echo CHtml::encode($predmet_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miestnost')); ?>:</b>
	<?php echo CHtml::encode($data->miestnost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vyucujuci')); ?>:</b>
	<?php echo CHtml::encode($data->vyucujuci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den')); ?>:</b>
	<?php echo CHtml::encode($data->den); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cas')); ?>:</b>
	<?php echo CHtml::encode($data->cas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kapacita')); ?>:</b>
	<?php echo CHtml::encode($data->kapacita); ?>
	<br />

	<?php if($_GET['isVisible'] != false) { ?>
	<b><?php echo CHtml::link('Zapísať rozvrhovú jednotku', array('userRozvrh/create','idTerminPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId())); ?></b>
	<?php } ?>
	<br />


</div>