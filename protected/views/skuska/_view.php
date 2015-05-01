<?php
/* @var $this SkuskaController */
/* @var $data Skuska */
?>

<div class="view">

	<?php
		//$count= Yii::app()->db->createCommand('SELECT count(*) from user_rozvrh ur where ur.id_termin_predmet =' .$model->id_termin_predmet)->queryScalar();
		$id_pred = CHtml::encode($data->id_predmet);
		$predmet_name = Yii::app()->db->createCommand('SELECT p.nazov FROM predmet p WHERE p.id ='.$id_pred)->queryScalar();
		$idUser = Yii::app()->user->getId();
	?>

	<?php
		$connection = Yii::app()->db;
		$command = $connection->createCommand("select count(*) pocet from user_skuska where id_skuska = ".$data->id);
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
	<?php echo $pocet; ?>/<?php echo CHtml::encode($data->kapacita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poznamka')); ?>:</b>
	<?php echo CHtml::encode($data->poznamka); ?>
	<br />
	
	<?php if(($_GET['isVisible'] != false) && ($pocet<$data->kapacita)) { ?>
	<b><?php echo CHtml::link('Prihlásiť sa na termín', array('userSkuska/create','idSkuska'=>$data->id, 'idUser' => Yii::app()->user->getId())); ?></b>
	<?php } ?>
	<?php if($_GET['isSkuskaVisible'] != false) { ?>
	<?php
	echo CHtml::link(CHtml::encode('Odhlásiť'), array('userSkuska/delete', 'idSkuska'=>$data->id, 'idUser' => Yii::app()->user->getId()),
	  array(
	    'submit'=>array('userSkuska/delete', 'id'=>$data->id, 'idSkuska'=>$data->id, 'idUser' => Yii::app()->user->getId()),
	    'class' => 'delete','confirm'=>'Are you sure?'
	  )
	);
	?>
	<?php } ?>
	<?php if($pocet >= $data->kapacita && $_GET['isSkuskaVisible'] == false) {?>
		<b>Termín je obsadený!</b>
	<?php } ?>
	<br />


</div>