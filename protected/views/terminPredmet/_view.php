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


	<?php
		$connection = Yii::app()->db;
		$command = $connection->createCommand("select count(*) pocet from user_rozvrh where id_termin_predmet = ".$data->id);
		$caterow = $command->queryAll(); //executes the SQL statement and returns the all rows

		//echo "Pocet: ".$caterow["pocet"];
		foreach($caterow as $retcat )
		{
		    $pocet = $retcat["pocet"];
		}
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
	<?php echo $pocet; ?>/<?php echo CHtml::encode($data->kapacita); ?>
	<br />

	<?php if($_GET['isVisible'] != false && $pocet<$data->kapacita) { ?>
	<b><?php echo CHtml::link('Zapísať rozvrhovú jednotku', array('userRozvrh/create','idTerminPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId())); ?></b>
	<?php } ?>
	<?php if($_GET['isTerminPredmetVisible'] != false) { ?>
	<?php
	echo CHtml::link(CHtml::encode('Odhlásiť'), array('userRozvrh/delete', 'idTerminPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId()),
	  array(
	    'submit'=>array('userRozvrh/delete', 'id'=>$data->id, 'idTerminPredmet'=>$data->id, 'idUser' => Yii::app()->user->getId()),
	    'class' => 'delete','confirm'=>'Are you sure?'
	  )
	);
	?>
	<?php } ?>
	<?php if($pocet >= $data->kapacita && $_GET['isTerminPredmetVisible'] == false) {?>
		<b>Rozvrhová jednotka je obsadená!</b>
	<?php } ?>
	<br />


</div>