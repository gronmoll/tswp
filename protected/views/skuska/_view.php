<?php
/* @var $this SkuskaController */
/* @var $data Skuska */
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
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('datum')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd MMM yyyy",$data->datum)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cas')); ?>:</b>
	<?php echo CHtml::encode($data->cas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miestnost')); ?>:</b>
	<?php echo CHtml::encode($data->miestnost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kapacita')); ?>:</b>
	<?php echo CHtml::encode($data->kapacita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poznamka')); ?>:</b>
	<?php echo CHtml::encode($data->poznamka); ?>
	<br />
	
	<?php if($_GET['isVisible'] != false) { ?>
	<b><?php echo CHtml::link('Prihlásiť sa na termín', array('userSkuska/create','idSkuska'=>$data->id, 'idUser' => Yii::app()->user->getId())); ?></b>
	<?php } ?>
	<br />


</div>